<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //
    protected $table ='transaksis';
    protected $fillable =['barang_id','pembeli_id','pemilik_id','penawaran_id','harga_akhir','lokasi','status_transaksi'];
    protected $guarded =['id'];

    public function barang()
    {
    	# code...
    	return $this->belongsTo(barang::class);
    }
    public function pembeli()
    {
    	# code...
    	return $this->belongsTo(pembeli::class);
    }
    public function pemilik()
    {
    	# code...
    	return $this->belongsTo(pemilik::class);
    }
    public function penawaran()
    {
        # code...
        return $this->belongsTo(penawaran::class);
    }


    public function getNamaBarangAttribute()
    {
    	# code...
    	return $this->barang->nama_barang;
    }
    public function getHargaBarangAttribute()
    {
    	# code...
    	return $this->barang->harga;
    }
}
