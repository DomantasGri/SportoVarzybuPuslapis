<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('varzybos', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('Komanda_1');
            $table->unsignedBigInteger('Komanda_2');
            $table->date('Varzybu_data');
            $table->Time('Varzybu_laikas');
            $table->timestamps();

            
            $table->foreign('Komanda_1')
                  ->references('id')
                  ->on('komandos')
                  ->onDelete('cascade');  
                  
            $table->foreign('Komanda_2')
                  ->references('id')
                  ->on('komandos')
                  ->onDelete('cascade'); 
        });

             
        DB::statement('ALTER TABLE varzybos ADD CONSTRAINT different_teams CHECK (Komanda_1 != Komanda_2)');
   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
