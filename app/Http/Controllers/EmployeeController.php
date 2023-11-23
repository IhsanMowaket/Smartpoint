<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\EmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    public function index()
    {
        $userCompany = Auth::user()->company;

        $employees = Employee::whereHas('user', function ($query) use ($userCompany) {
            $query->where('company', $userCompany);
        })->with('user')->get();
        return view('employee.employee-page', compact('employees'));
    }

    public function store(EmployeeRequest $request)
    {

    }

    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {
        $validateData = $request->validate([
            'phone' => ['required', 'min:6', 'max:255', Rule::unique('users', 'phone')->ignore($employee->user->id),],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($employee->user->id),],
            'emergency_contact_name'=>'max:255|min:3',
            'emergency_contact_phone'=>'max:255|min:3',
        ]);
        Log::info('Validated data:', $validateData);

        DB::beginTransaction();
        $user = $employee->user;

        $user->phone = $validateData['phone'];
        $user->email = $validateData['email'];
        $user->role = 'employee';
        Log::info('User data before save:', ['phone' => $user->phone, 'email' => $user->email]);
        $user->save();
        $employee->emergency_contact_name = $validateData['emergency_contact_name'];
        $employee->emergency_contact_phone = $validateData['emergency_contact_phone'];


        Log::info('Employee and User data after refresh:', [
            'employee' => $employee->toArray(),
            'user' => $user->toArray()]);
        $user->refresh();
        $employee->refresh();
        return redirect()->back()->with('success','Information Updated successfully');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json();
    }
}
