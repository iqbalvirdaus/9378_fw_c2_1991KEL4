<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    protected $table ='kategoris';
    protected $fillable =['nama_kategori'];
    protected $guarded =['id']; 
 
    public function barang()
    {
    	# code...
    	$this->hasOne(barang::class,'kategori_id');
    }
    public function postingan()
    {
    	# code...
    	$this->hasMany(postingan::class,'kategori_id');
    }

    public function listKategori()
    {
        # code...
        $out=[];
        foreach ($this->all() as $kategori) {
            # code...
                $out[$kategori->id]="{$kategori->nama_kategori}";
        }
        return $out;   
    }
}
