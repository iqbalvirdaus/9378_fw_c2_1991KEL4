<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penawaran extends Model
{
    //
    protected $table ='penawarans';
    protected $fillable =['harga_penawaran','pembeli_id','barang_id'];
    protected $guarded =['id'];

    public function pembeli()
    {
    	# code...
    	return $this->belongsTo(pembeli::class);
    }
    public function barang()
    {
    	# code...
    	return $this->belongsTo(barang::class);
    }

}
