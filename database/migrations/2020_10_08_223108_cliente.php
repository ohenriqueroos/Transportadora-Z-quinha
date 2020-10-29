<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');
            $table->timestamps();
            $table->string('nomecompleto');
            $table->string('email');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('cpf');
            $table->date('datanascimento');
            $table->string('senha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
