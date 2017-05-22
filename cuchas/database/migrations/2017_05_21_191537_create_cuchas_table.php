<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuchasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuchas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('tamaño');
          $table->string('material');
          $table->string('ventana');
          $table->string('estilo');
          $table->string('colorPared1');
          $table->string('colorPared2');
          $table->string('forma');
          $table->string('colorTecho');
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
        Schema::dropIfExists('cuchas');
    }
}
