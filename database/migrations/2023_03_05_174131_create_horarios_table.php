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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_ID');

            $table->integer(  'clienteID');
            $table->dateTime('horaInicial');
            $table->dateTime( 'horaFinal');
            $table->timestamps();
            $table->foreign('cliente_ID')->references('id')->on('modelsclientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
