<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sub_contractors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('contact_firstname');
            $table->string('contact_lastname');
            $table->string('position');
            $table->string('web_site');
            $table->string('Address_zusatz')->nullable();
            $table->string('street');
            $table->string('zip_code');
            $table->string('city');
            $table->string('tax_id')->nullable();
            $table->string('Bank Name');
            $table->string('iban');
            $table->text('contracts_agreements')->nullable();
            $table->text('certifications_qualifications')->nullable();
            $table->text('work_history')->nullable();
            $table->text('safety_certifications')->nullable();
            $table->string('extra_emails')->nullable();
            $table->text('notes')->nullable();
            $table->integer('worker_count');
            $table->decimal('outstanding' , 8, 2)->default(0.00);
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_contractors');
    }
};
