<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class sukurtivarzybosTable extends Migration
{
    public function up()
    {
        Schema::create('varzybos', function (Blueprint $table) {
            $table->id();
            $table->date('varzybos_date');    // Date of the event
            $table->string('team1');          // First team
            $table->string('team2');          // Second team
            $table->time('time');             // Time of the event
            $table->timestamps();             // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('varzybos');
    }
}
