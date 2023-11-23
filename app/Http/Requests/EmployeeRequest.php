<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer|exists:users,id',
            'position' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female',
            'Address_zusatz' => 'nullable|string|max:255',
            'street' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:255',
            'status' => 'required|string|in:Single,Married,Widowed,Divorced',
            'id_card' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_phone' => 'required|string|max:255',
            'employee_id' => 'required|integer|unique:employees,employee_id',
            'insurance' => 'required|string|max:255',
            'insurance_number' => 'required|integer|digits:8',
            'Social_Security' => 'required|integer|digits:9',
            'tax_id' => 'required|integer|digits:9',
            'Num_of_children' => 'required|integer|between:0,5',
            'tax_class' => 'required|string|in:1,2,3,4,5',
            'Bank_Name' => 'required|string|max:255',
            'iban' => 'required|string|max:255',
            'employment_start_date' => 'required|date',
            'employment_end_date' => 'nullable|date|after:employment_start_date',
            'work_enum' => 'required|string|in:Part-Time,Full-Time,Mini_Job,Temporary',
            'Compensation_type' => 'required|string|in:Hourly Rate,Salary',
            'Compensation_amount' => 'required|numeric|min:0',
            'overtime_eligibility' => 'required|boolean',
            'pto_balance' => 'required|numeric|min:0|max:40',
            'absence_history' => 'nullable|array',
            'attendance_records' => 'nullable|array',
            'work_hours' => 'required|time',
            'work_days' => 'required|string|in:Monday-Friday,Weekends',
            'break_schedule' => 'required|time',
            'previous_employers' => 'nullable|array',
            'job_history' => 'nullable|array',
            'training_history' => 'nullable|array',
            'certifications_qualifications' => 'nullable|array',
            'monthly_worked_uhr' => 'required|numeric|min:0|max:200',
            'Picture' => 'nullable|string|max:255',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
