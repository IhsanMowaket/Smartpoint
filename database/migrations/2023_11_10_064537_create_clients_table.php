<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('contact_firstname');
            $table->string('contact_lastname');
            $table->string('position')->nullable();
            $table->string('web_site')->nullable();
            $table->string('Address_zusatz')->nullable();
            $table->string('street');
            $table->string('zip_code');
            $table->string('city');
            $table->string('tax_id')->nullable();
            $table->string('extra_emails')->nullable();
            $table->text('notes')->nullable();
            $table->decimal('outstanding', 8, 2)->default(0.00);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
