<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenawaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penawarans', function (Blueprint $table) {
            $table->increments('id');
            $table->float('harga_penawaran');
            $table->integer('pembeli_id',false,true);
            $table->foreign('pembeli_id')->references('id')->on('pembelis')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('barang_id',false,true);
            $table->foreign('barang_id')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('penawarans');
    }
}
