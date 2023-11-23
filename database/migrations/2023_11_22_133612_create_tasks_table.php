<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pickup_Location', 500);
            $table->string('pickup_Customer', 255);
            $table->string('delivery_Location', 500);
            $table->string('delivery_Customer', 255);
            $table->integer('Sequence');
            $table->string('category', 50);
            $table->integer('distance');
            $table->json('note')->nullable();
            $table->time('pickup_Time');
            $table->date('pickup_date'); // Changed from time to date
            $table->string('phone_Number');
            $table->timestamps();
            $table->foreignId('sub_contractors')->nullable()->constrained();
            $table->foreignId('employee')->constrained();
            $table->foreignId('client')->nullable()->constrained();
            $table->enum('status',['Started', 'Finished', 'in Progress', 'Wait']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
