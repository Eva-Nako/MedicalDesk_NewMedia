<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePazientisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pazientis', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('Conome');
            $table->string('Email')->unique();
            $table->string('Cellulare');
            $table->string('Nazionalita');
            $table->integer('Code_di_fiscale');
            $table->date('Data_di_nascita');
            $table->char('Sesso');
            $table->string('Comune_residenca');
            $table->integer('Cap');
            $table->string('Indirizzio');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pazientis');
    }
}
