<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('one_stop_transfers', function (Blueprint $table) {
            $table->id();
            $table->string('origen_location');
            $table->string('destination_location');
            $table->string('origen_customer')->nullable();
            $table->string('destination_customer')->nullable();
            $table->string('geo')->nullable();
            $table->timestamp('task_time');
            $table->timestamp('end_time')->nullable();
            $table->string('task_status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('one_stop_transfers');
    }
};
