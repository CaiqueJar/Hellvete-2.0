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
        Schema::create('tbproduto', function (Blueprint $table) {
            $table->increments('idProduto');
            $table->string('nomeProduto', 40);
            $table->double('valorProduto');
            $table->string('fotoProduto', 120);
            $table->string('descricaoProduto', 400);
            $table->unsignedInteger('idCategoria');

            $table->foreign('idCategoria')->references('idCategoria')->on('tbcategoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbproduto');
    }
};
