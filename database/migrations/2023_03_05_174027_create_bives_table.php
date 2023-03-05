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
        Schema::create('bives', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_ID');
            $table->string ('pratoprincipal');
            $table->string ('pratoentrada');
            $table->string('opcaolanche1');
            $table->string( 'opcaolanche2');
            $table->string('opcaolanche3');
            $table->string('bebidaA');
            $table->string ('bebidaB');
            $table->integer('pratoprincipalQtd');
            $table->integer('pratoentradaQTD');
            $table->integer( 'opcaolanche1QTD');
            $table->integer('opcaolanche2QTD');
            $table->integer('opcaolanche3QTD');
            $table->integer( 'bebidaAQTD');
            $table->integer ('bebidaBQTD');

            $table->foreign('cliente_ID')->references('id')->on('modelsclientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bives');
    }
};
