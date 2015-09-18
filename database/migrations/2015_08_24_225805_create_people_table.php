<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome',60);
            $table->string('email');
            $table->string('cpf',11);
            $table->string('key',255);
            $table->integer('analisar_1');
            $table->integer('analisar_2');
            $table->integer('analisar_3');
            $table->integer('analisar_4');
            $table->integer('aplicar_1');
            $table->integer('aplicar_2');
            $table->integer('aplicar_3');
            $table->integer('aplicar_4');
            $table->integer('avaliar_1');
            $table->integer('avaliar_2');
            $table->integer('avaliar_3');
            $table->integer('avaliar_4');
            $table->integer('compreender_1');
            $table->integer('compreender_2');
            $table->integer('compreender_3');
            $table->integer('compreender_4');
            $table->integer('criar_1');
            $table->integer('criar_2');
            $table->integer('criar_3');
            $table->integer('criar_4');
            $table->integer('memorizar_1');
            $table->integer('memorizar_2');
            $table->integer('memorizar_3');
            $table->integer('memorizar_4');
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
        Schema::drop('peoples');
    }
}
