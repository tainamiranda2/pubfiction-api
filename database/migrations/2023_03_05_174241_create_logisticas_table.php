<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logisticas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_ID');

            $table->string(  'nome');
            $table->integer('cadeirasQTD');
            $table->integer( 'convidadosQTD');
            $table->integer( 'mesasQTD');
            $table->timestamps();
            $table->foreign('cliente_ID')->references('id')->on('modelsclientes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logisticas');
    }
};
