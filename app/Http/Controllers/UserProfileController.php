<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Employee;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WorkTimeRecording;

class UserProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }


    public function show($id)
    {
        $employee = Employee::with('user')->findOrFail($id);
        $userId = $employee->user_id; // Assuming each employee has a related user

        $month = Carbon::now()->month;
        $year = Carbon::now()->year;

        // Fetch work time recordings for the specific user, month, and year
        // We are using 'record_date' for filtering, which should be sufficient
        $workTimeRecordings = (new \App\Models\WorkTimeRecording)->where('user_id', $userId)
            ->whereYear('record_date', $year)
            ->whereMonth('record_date', $month)
            ->get();

        // Create a collection of days in the month
        $daysOfMonth = Carbon::create($year, $month)->daysInMonth;
        $days = collect(range(1, $daysOfMonth))->map(function ($day) use ($year, $month) {
            return Carbon::createFromDate($year, $month, $day);
        });

        return view('profile', [
            'employee' => $employee,
            'days' => $days,
            'workTimeRecordings' => $workTimeRecordings
        ]);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
