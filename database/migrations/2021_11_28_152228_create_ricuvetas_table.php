<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRicuvetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ricuvetas', function (Blueprint $table) {
            $table->id();
            $table->string('Nome_user');
            $table->string('Cogname_user');
            $table->string('Email_fattura')->unique();
            $table->string('Citta');
            $table->string('Codice_Fiscale');
            $table->string('Provinzia');
            $table->integer('Cap');
            $table->string('Indirizzo');
            $table->string('Nazione');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ricuvetas');
    }
}
