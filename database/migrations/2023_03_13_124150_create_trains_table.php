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
        /*
            deve essere settato l'orario in quello europeo, roma = >>

            config \ app.php \ 'timezone' da:'UTC' a: 'Europe/Rome'
        */

        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('agency')->default('Treni Italia - Ferrovie dello Stato Italiane');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->string('train_code');
            $table->string('carriages_number')->nullable();
            $table->boolean('in_time');
            $table->boolean('deleted');
            /*
            Azienda
            Stazione di partenza
            Stazione di arrivo
            Orario di partenza
            Orario di arrivo
            Codice Treno
            Numero Carrozze
            In orario
            Cancellato
            */

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
