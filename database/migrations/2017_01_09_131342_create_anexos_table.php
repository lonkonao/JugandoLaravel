<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('anexos', function (Blueprint $table) {
             /*funcionario estamento box sector anexo */
             $table->increments('id');
             $table->string('funcionario');
             $table->string('estamento');
             $table->string('box');
             $table->string('sector');
             $table->string('anexo');
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
         Schema::drop('anexos');
     }
 }
