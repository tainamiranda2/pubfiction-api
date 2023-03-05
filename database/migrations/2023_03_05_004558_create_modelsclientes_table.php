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
        Schema::create('modelsclientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',50);
            $table->string('email',50);
            $table->integer('celular1');
            $table->integer('celular2');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelsclientes');
    }
};
