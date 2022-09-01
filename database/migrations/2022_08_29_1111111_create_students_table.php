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
        Schema::create('students', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->enum('id_doc', ['CC', 'TI', 'CE', 'PASS']);
            $table->timestamps();
            $table->text('tipodoc');
            $table->integer('numdoc');
            $table->text('docident');
            $table->date('fecexp');
            $table->unsignedBigInteger('id_expmuni');
            $table->string('nombres');
            $table->string('priapelli');
            $table->string('segapellido');
            $table->enum('genero',['M','F','otros']);
            $table->date('fecnacimiento');
            $table->integer('estrato');
            $table->unsignedBigInteger('id_cursos');
            $table->unsignedBigInteger('id_muni_nac');

            //llaves
            $table->foreign('id_expmuni')->references('id')->on('towns')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_cursos')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('id_muni_nac')->references('id')->on('towns')->onDelete('cascade')->onUpdate('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
