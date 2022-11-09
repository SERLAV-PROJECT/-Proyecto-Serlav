<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCliente');
            $table->date('fecha');
            $table->integer('valorTotal');
            $table->string('estado');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_id');
 
            $table->foreign('user_id')->references('id')->on('users');


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
        Schema::dropIfExists('factura');
    }
};
