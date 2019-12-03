<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pokemon_id')->unsigned();
            // $table->bigInteger('users_id');
            $table->string('asunto');
            $table->string('contenido');
            $table->timestamps();
            
            $table->foreign('pokemon_id')->references('id')->on('pokemon');
            // $table->foreign('users_id')->references('id')->on('users');

        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');    
        
    }
}
