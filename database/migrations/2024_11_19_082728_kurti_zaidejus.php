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
        Schema::create('zaidejas', function(Blueprint $table){
            $table->id();
            $table->string('vardas');
            $table->string('pavarde');
            $table->string('komanda');
            $table->integer('taskai');
            $table->integer('perdavimai');
            $table->integer('blokai');
            $table->integer('klaidos');
            $table->integer('geltonos kortos');
            $table->integer('Raudonos kortos');
            $table->integer('efektyvumas');
            $table->foreign('komanda')->references('id')->on('komandos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('zaidejas');
    }
};
