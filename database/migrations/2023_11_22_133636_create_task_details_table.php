<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskDetailsTable extends Migration
{
    public function up(): void
    {
        Schema::create('task_details', function (Blueprint $table) {
            $table->unsignedBigInteger('task');
            $table->foreign('task')->references('id')->on('tasks');
            $table->json('fotos_around'); // json column
            $table->string('Kennzeichen', 500);
            $table->boolean('schaden');
            $table->string('Schadenart', 255)->nullable();
            $table->string('schadenStelle', 255)->nullable();
            $table->string('schadenFoto', 500);
            $table->integer('kmStand');
            $table->integer('tankWert');
            $table->string('kmStandFoto', 500);
            $table->string('tankWertFoto');
            $table->string('fahrzeugscheinID', 255);
            $table->timestamp('zulassungsDatum');
            $table->string('herstellerKurzbe');
            $table->string('code22');
            $table->string('fahrzeugID');
            $table->string('farbe');
            $table->string('kraftstoff');
            $table->string('zustandA', 255);
            $table->string('zustandI', 255);
            $table->tinyInteger('schlussel');
            $table->boolean('serviceHeft');
            $table->boolean('tankKarte');
            $table->boolean('verbandKasten');
            $table->boolean('zulassungSchein');
            $table->boolean('warndreieck');
            $table->boolean('warnweste');
            $table->string('reifen');
            $table->json('reifenzustand'); // json column
            $table->boolean('ersatzReifen');
            $table->json('bemerkung'); // json column
            $table->string('kundeUnterschrift', 500);
            $table->string('mitarbeiterUnterschrift', 500);
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
        Schema::dropIfExists('processes');
    }
}
