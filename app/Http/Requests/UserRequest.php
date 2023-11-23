<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'company' => 'required|string|max:255',
            'phone' => 'required|string|unique:users,phone',
            'email' => 'required|string|email|max:255|unique:users,email',
            'login_code' => 'nullable|string',
            'field' => 'required|in:Logistic,Security,Service',
            'role' => 'required|in:SuperAdmin,Supervisor,Accountant,HR Manager,CRM Manager,Employee,Client,Sub-Contractor,Worker,Visitor',
            'is_online' => 'sometimes|boolean',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
