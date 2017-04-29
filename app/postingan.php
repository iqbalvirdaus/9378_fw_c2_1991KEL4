<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postingan extends Model
{
    //
    protected $table ='postingans';
    protected $fillable =['nama_postingan','pemilik_id','barang_id','kategori_id'];
    protected $guarded =['id'];

    public function pemilik()
    {
    	# code...
    	return $this->belongsTo(pemilik::class);
    }
    public function barang()
    {
    	# code...
    	return $this->belongsTo(barang::class);
    }
    public function kategori()
    {
        # code...
        return $this->belongsTo(kategori::class);
    }

}
