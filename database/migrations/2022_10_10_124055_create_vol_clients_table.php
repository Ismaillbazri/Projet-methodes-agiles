<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vol_clients', function (Blueprint $table) {
            $table->id();
            $table->integer('vol_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->foreign('vol_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('roles')->onDelete('cascade');
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
        Schema::dropIfExists('vol__clients');
    }
}
