<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('NumVol');
            $table->string('Depart',200);
            $table->string('Arrivee',200);
            $table->float('Prix');
            $table->string('Duree',200);
            $table->string('HeureDepart',200);
            $table->string('HeureArrivee',200);
            $table->string('Date',200);
            $table->string('Compagnie',200);
            //$table->integer('date_id')->unsigned();
            //$table->foreign('date_id')->references('id')->on('dates')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vols');
    }
}
