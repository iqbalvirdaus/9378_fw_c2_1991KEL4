<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postingans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_postingan');
            $table->integer('pemilik_id',false,true);
            $table->foreign('pemilik_id')->references('id')->on('pemiliks')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('barang_id',false,true);
            $table->foreign('barang_id')->references('id')->on('pemiliks')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('kategori_id',false,true);
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('postingans');
    }
}
