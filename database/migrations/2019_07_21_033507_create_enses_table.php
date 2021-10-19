<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mat');
            $table->string('nom');
            $table->string('pre');
            $table->string('libelleNationalite');
            $table->string('apost');
            $table->string('tel');
            $table->string('mailEnt');
            $table->string('libelleFonc');
            $table->string('libelleGrade');
            $table->string('libelleCatenseignant');
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
        Schema::dropIfExists('enses');
    }
}
