<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->dateTime('invoice_date');
            $table->dateTime('due_date');
            $table->text('starting_text');
            $table->text('ending_text');
            $table->string('foot_text');
            $table->string('status');
            $table->integer('value_status');
            $table->text('note')->nullable();
            $table->string('total_amount');
            $table->softDeletes();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users')->noActionOnDelete();
            $table->foreignId('client_id')->constrained('users')->noActionOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Financial');
    }
};
