<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class pembeli extends Model
{
    //
    protected $table ='pembelis';
    protected $fillable =['nama','tgl_lahir','gender','alamat','no_telp','pengguna_id'];
    protected $guarded =['id'];

    public function pengguna()
    {
    	# code...
    	return $this->belongsTo(pengguna::class);
    }
    public function penawaran()
    {
    	# code...
    	return $this->hasOne(penawaran::class,'pembeli_id');
    }
    public function transaksi()
    {
    	# code...
    	return $this->hasMany(pembeli::class,'pembeli_id');
    }
}