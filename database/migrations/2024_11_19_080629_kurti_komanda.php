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
        Schema::create('komandos', function(Blueprint $table){
            $table->id();
            $table->string('komandos pavadinmas');
            $table->integer('Laimejimai');
            $table->string('treneris');
            $table->integer('Pralaimejimai');
            $table->integer('taskai');
            $table->integer('Perdavimai');
            $table->integer('Blokai');
            $table->integer('Klaidos');
            $table->integer('Geltonos Kortos');
            $table->integer('Raudonos Kortos');
            $table->integer('Efektyvumas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zaidejas');
        Schema::dropIfExists('komandos');
    }
};
