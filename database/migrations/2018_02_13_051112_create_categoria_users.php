<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('categoria_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('ruta')->nullable();
            $table->string('contenido')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias');
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
        Schema::dropIfExists('categoria_users');
    }
}
