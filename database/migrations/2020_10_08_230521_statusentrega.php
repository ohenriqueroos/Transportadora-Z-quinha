<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Statusentrega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statusentrega', function (Blueprint $table) {
            $table->bigIncrements('id_statusentrega');
            $table->unsignedBigInteger('id_pedido');
            $table->foreign('id_pedido')->references('id_pedido')->on('pedido');
            $table->timestamps();
            $table->datetime('datahorapostado');
            $table->datetime('datahoraentrega');
            $table->string('codigorastreio');
            $table->string('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statusentrega');
    }
}
