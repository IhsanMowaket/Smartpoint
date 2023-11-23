<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes, HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'position',
        'firstname',
        'lastname',
        'gender',
        'Address_zusatz',
        'street',
        'zip_code',
        'city',
        'date_of_birth',
        'place_of_birth',
        'status',
        'id_card',
        'nationality',
        'emergency_contact_name',
        'emergency_contact_phone',
        'employee_id',
        'insurance',
        'insurance_number',
        'Social_Security',
        'tax_id',
        'Num_of_children',
        'tax_class',
        'Bank Name',
        'iban',
        'employment_start_date',
        'employment_end_date',
        'work_enum',
        'Compensation_type',
        'Compensation_amount',
        'overtime_eligibility',
        'pto_balance',
        'absence_history',
        'attendance_records',
        'work_hours',
        'work_days',
        'break_schedule',
        'previous_employers',
        'job_history',
        'training_history',
        'certifications_qualifications',
        'monthly_worked_uhr',
        'Picture',
    ];
    
    protected $casts = [
        'date_of_birth' => 'date',
        'employment_start_date' => 'date',
        'employment_end_date' => 'date',
        'absence_history' => 'array',
        'attendance_records' => 'array',
        'work_hours' => 'datetime',
        'break_schedule' => 'datetime',
        'previous_employers' => 'array',
        'job_history' => 'array',
        'training_history' => 'array',
        'certifications_qualifications' => 'array',
    ];
}
