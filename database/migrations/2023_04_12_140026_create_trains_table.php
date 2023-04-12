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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 20);
            $table->string('Stazione di Partenza', 20);
            $table->string('Stazione di Arrivo');
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->string('Codice treno', 4)->unsigned();
            $table->bigInteger('Numero Carrozze')->unsigned();
            $table->smallInteger('In orario');
            $table->text('Cancellato');
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
        Schema::dropIfExists('trains');
    }
};
