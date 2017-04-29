<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelumlakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belumlakus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('barang_id',false,true);
            $table->foreign('barang_id')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('penawaran_id',false,true);
            $table->foreign('penawaran_id')->references('id')->on('penawarans')->onUpdate('cascade')->onDelete('cascade');
            $table->float('harga_tertinggi');
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
        Schema::drop('belumlakus');
    }
}
