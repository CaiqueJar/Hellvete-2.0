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
        Schema::create('tbcliente', function (Blueprint $table) {
            $table->increments('idCliente');
            $table->string('nomeCliente', 300);
            $table->date('dtNascCliente');
            $table->string('estadoCivilCliente', 30);
            $table->string('enderecoCliente', 200);
            $table->string('numeroCliente', 5);
            $table->char('cepCliente', 10);
            $table->string('cidadeCliente', 60);
            $table->string('estadoCliente', 60);
            $table->string('rgCliente', 12);
            $table->string('cpfCliente', 14);
            $table->string('emailCliente', 120);
            $table->string('celularCliente', 20);
            $table->string('foneCliente', 18);
            $table->string('senhaCliente', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbcliente');
    }
};
