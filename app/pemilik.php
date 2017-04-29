<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
    //
    protected $table ='pemiliks';
    protected $fillable =['nama','tgl_lahir','gender','alamat','no_telp','pengguna_id'];
    protected $guarded =['id'];

    public function pengguna()
    {
    	# code...
    	return $this->belongsTo(pengguna::class);
    } 
    public function barang()
    {
    	# code...
    	return $this->hasMany(barang::class,'pemilik_id');
    }
    public function postingan()
    {
    	# code...
    	return $this->hasMany(postingan::class,'pemilik_id');
    }
    public function transaksi()
    {
    	# code...
    	return $this->hasMany(transaksi::class,'pemilik_id');
    }
}
