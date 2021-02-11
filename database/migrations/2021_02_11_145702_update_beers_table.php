<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beers', function (Blueprint $table) {
            //aggiorna a max 100 caratteri la voce table eseguendo: php artisan migrate
            $table->string('nome', 50)->change();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beers', function (Blueprint $table) {
            // ripristina a 50 caratteri eseguendo: php artisan migrate:rollback
            // $table->string('nome', 30);
        });
    }
}
