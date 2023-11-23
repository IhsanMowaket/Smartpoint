<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Unique identifier for each employee.
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User associated with the employee.
            $table->string('position')->nullable(); // Employee's job position.
            $table->string('firstname'); // Employee's first name.
            $table->string('lastname'); // Employee's last name.
            $table->enum('gender', ['male', 'female']); // Employee's gender.
            $table->string('Address_zusatz')->nullable(); // Additional address details.
            $table->string('street'); // Street address.
            $table->string('zip_code'); // Zip or postal code.
            $table->string('city'); // City of residence.
            $table->date('date_of_birth'); // Date of birth.
            $table->string('place_of_birth'); // Place of birth.
            $table->enum('status', ['Single', 'Married', 'Widowed', 'Divorced']); // Marital status.
            $table->string('id_card'); // Identification card information.
            $table->string('nationality'); // Nationality of the employee.

            // Emergency Contact Information
            $table->string('emergency_contact_name')->nullable(); // Emergency contact name.
            $table->string('emergency_contact_phone')->nullable(); // Emergency contact phone number.

            // Employment Details
            $table->string('employee_id')->nullable(); // Employee's unique identifier.
            $table->string('insurance'); // Insurance information.
            $table->string('insurance_number'); // Insurance number.
            $table->string('Social_Security'); // Social Security number.
            $table->string('tax_id'); // Tax identification number.
            $table->integer('Num_of_children'); // Number of children.
            $table->enum('tax_class', ['1', '2', '3', '4', '5']); // Tax class.
            $table->string('bank_name'); // Bank name for payment.
            $table->string('iban'); // IBAN (International Bank Account Number).

            // Employment Dates and Details
            $table->date('employment_start_date')->nullable(); // Start date of employment.
            $table->date('employment_end_date')->nullable(); // End date of employment (if applicable).///////////////
            $table->enum('work_enum', ['Part-Time', 'Full-Time', 'Mini-Job', 'Temporary']); // Employment type.
            $table->enum('Compensation_type', ['Hourly Rate', 'Salary']); // Compensation type.//////////////
            $table->decimal('Compensation_amount', 8, 2)->nullable(); // Compensation amount.////////
            $table->boolean('overtime_eligibility')->default(false); // Overtime eligibility.

            // Leave and Attendance
            $table->decimal('pto_balance', 8, 2)->nullable(); // Paid time off (PTO) balance.
            $table->json('absence_history')->nullable(); // Absence history.
            $table->json('attendance_records')->nullable(); // Attendance records.

            // Work Schedule
            $table->string('work_hours')->nullable(); // Work hours schedule.
            $table->string('work_days')->nullable(); // Work days schedule.
            $table->string('break_schedule')->nullable(); // Break schedule.

            // Work History
            $table->json('previous_employers')->nullable(); // Previous employers.
            $table->json('job_history')->nullable(); // Job history.

            // Training and Certifications
            $table->json('training_history')->nullable(); // Training history.
            $table->json('certifications_qualifications')->nullable(); // Certifications and qualifications.

            $table->decimal('monthly_worked_uhr', 8, 2)->nullable(); // Monthly worked hours.
            $table->decimal('monthly_planed_uhr', 8, 2)->nullable()->default(176); // Monthly worked hours.
            $table->string('Picture')->nullable(); // Employee's picture.

            $table->softDeletes(); // Soft delete support.
            $table->timestamps(); // Created at and updated at timestamps.
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
