<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // crezione colonne tabella, precedemente inizializzata da mysql
        // link tabella: https://laravel.com/docs/4.2/schema
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30); //$table->tipologiaDiDato('nomeColonna', quantità caratteri) string equivale al varchar di sql
            $table->string('tipo', 30);
            $table->string('paese', 20);
            $table->string('regione', 20);
            $table->float('gradazione_alcolica', 4, 1);
            $table->longText('descrizione');
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
        Schema::dropIfExists('beers');
    }
}
