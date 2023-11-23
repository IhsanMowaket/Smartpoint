<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('company')->default('LRW Transport & Logistik GmbH');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('login_code')->nullable();
            $table->enum('field',['Logistic', 'Security', 'Service'])->default('Service');
            $table->enum('role', ['SuperAdmin', 'Supervisor', 'Accountant', 'HR Manager', 'CRM Manager', 'Employee', 'Client', 'Sub-Contractor', 'Worker','Visitor'])->default('Visitor');
            $table->boolean('is_online')->nullable()->default(true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
