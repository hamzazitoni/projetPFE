<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name');
            $table->string('firstName');
            $table->string('email');
            $table->string('appoge');
            $table->string('date');
            $table->string('sex');
            $table->string('password');
            $table->integer('coach_id')->default(0);
            $table->integer('etudiant_vie')->default(100);
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
        Schema::dropIfExists('etudiants');
    }
}
