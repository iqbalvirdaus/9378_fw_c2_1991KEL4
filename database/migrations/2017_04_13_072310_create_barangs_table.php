<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->string('merk');
            $table->string('warna');
            $table->string('foto');
            $table->integer('jumlah');
            $table->float('harga');
            $table->float('harga_tawaran');
            $table->text('keterangan');
            $table->integer('kategori_id',false,true);
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('pemilik_id',false,true);
            $table->foreign('pemilik_id')->references('id')->on('pemiliks')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('barangs');
    }
}
