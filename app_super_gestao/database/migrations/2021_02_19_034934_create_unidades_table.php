<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidades',  5); // cm, metro, mm, kg
            $table->string('descricao', 30);
            $table->timestamps();
        });


        //adicionar os relacionamentos com a tabela produtos
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //adicionar os relacionamentos com a tabela produto detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         //remover os relacionamentos com a tabela produtos
        Schema::table('produto_detalhes', function(Blueprint $table){
            // remover a foreign
            $table->dropForeign('produto_detalhes_unidade_id_foreign');
            //remover a colulna
            $table->dropColumn('unidade_id');
        });


        //remover os relacionamentos com a tabela produto detalhes
        Schema::table('produtos', function(Blueprint $table){
            // remover a foreign
            $table->dropForeign('produtos_unidade_id_foreign');
            //remover a colulna
            $table->dropColumn('unidade_id');
        });


        
        Schema::dropIfExists('unidades');
    }
}
