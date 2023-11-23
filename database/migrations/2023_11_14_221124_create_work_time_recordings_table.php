<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('work_time_recordings', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->dateTime('record_date'); // Renamed for clarity
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->timestamp('pause_start')->nullable();
            $table->timestamp('pause_end')->nullable();
            $table->decimal('hours_worked', 8, 2)->nullable(); // Renamed for clarity
            $table->enum('status', ['approved', 'not approved', 'pending'])->default('pending'); // Assuming this is for approval status
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // New columns for month and year
            $table->integer('month')->nullable();
            $table->integer('year');

            $table->softDeletes(); // For soft delete functionality
            $table->timestamps(); // Created_at and Updated_at timestamps
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('work_time_recordings');
    }
};
