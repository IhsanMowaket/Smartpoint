<?php

namespace App\Http\Resources;

use App\Models\Employee;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Employee */
class EmployeeResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'position' => $this->position,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'gender' => $this->gender,
            'address_zusatz' => $this->Address_zusatz,
            'street' => $this->street,
            'zip_code' => $this->zip_code,
            'city' => $this->city,
            'date_of_birth' => $this->date_of_birth->format('Y-m-d'),
            'place_of_birth' => $this->place_of_birth,
            'status' => $this->status,
            'id_card' => $this->id_card,
            'nationality' => $this->nationality,
            'emergency_contact_name' => $this->emergency_contact_name,
            'emergency_contact_phone' => $this->emergency_contact_phone,
            'employee_id' => $this->employee_id,
            'insurance' => $this->insurance,
            'insurance_number' => $this->insurance_number,
            'social_security' => $this->Social_Security,
            'tax_id' => $this->tax_id,
            'num_of_children' => $this->Num_of_children,
            'tax_class' => $this->tax_class,
            'bank_name' => $this->Bank_Name,
            'iban' => $this->iban,
            'employment_start_date' => $this->employment_start_date->format('Y-m-d'),
            'employment_end_date' => ($this->employment_end_date) ? $this->employment_end_date->format('Y-m-d') : null,
            'work_enum' => $this->work_enum,
            'compensation_type' => $this->Compensation_type,
            'compensation_amount' => $this->Compensation_amount,
            'overtime_eligibility' => $this->overtime_eligibility,
            'pto_balance' => $this->pto_balance,
            'absence_history' => $this->absence_history,
            'attendance_records' => $this->attendance_records,
            'work_hours' => $this->work_hours,
            'work_days' => $this->work_days,
            'break_schedule' => $this->break_schedule,
            'previous_employers' => $this->previous_employers,
            'job_history' => $this->job_history,
            'training_history' => $this->training_history,
            'certifications_qualifications' => $this->certifications_qualifications,
            'monthly_worked_uhr' => $this->monthly_worked_uhr,
            'picture' => $this->Picture,
        ];
    }
}
