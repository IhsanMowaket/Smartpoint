<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('firstname'); // Employee's first name.
            $table->string('lastname'); // Employee's last name.
            $table->enum('gender', ['male', 'female']); // Employee's gender.
            $table->string('Address_zusatz')->nullable(); // Additional address details.
            $table->string('street'); // Street address.
            $table->string('zip_code'); // Zip or postal code.
            $table->string('city'); // City of residence.
            $table->date('date_of_birth'); // Date of birth.
            $table->string('place_of_birth'); // Place of birth.
            $table->string('id_card'); // Identification card information.
            $table->string('driver_license'); // Identification card information.
            $table->string('nationality'); // Nationality of the employee.
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
