<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntraImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entra_imagenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('estado')->nullable();
            $table->integer('categoria_users_id')->unsigned();
            $table->foreign('categoria_users_id')
                  ->references('id')
                  ->on('categoria_users');
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
        Schema::dropIfExists('entra_imagenes');
    }
}
