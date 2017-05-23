<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class barang extends Model 
{
    //
    protected $table ='barangs';
    protected $fillable =['nama_barang','merk','warna','foto','foto','jumlah','harga','harga_tawaran','keterangan','kategori_id','pemilik_id'];
    protected $guarded =['id'];

    public function kategori()
    {
    	# code...
    	return $this->belongsTo(kategori::class);
    }
    public function pemilik()
    {
    	# code...
    	return $this->belongsTo(pemilik::class);
    }
    public function penawaran()
    {
    	# code...
    	return $this->hasOne(penawaran::clsas,'barang_id');
    }
    public function postingan()
    {
    	# code...
    	return $this->hasMany(postingan::class,'barang_id');
    }
    public function transaksi()
    {
    	# code...
    	return $this->hasOne(transaksi::class,'barang_id');
    }
   
}
 