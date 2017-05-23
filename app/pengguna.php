<?php

namespace App;
use Illuminate\Auth\Authenticaatable;//
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;//
class pengguna extends Authenticable
{
    //
    protected $table ='penggunas';
    protected $fillable =['username','email','level','password'];
    protected $guarded =['id'];

    public function pembeli()
    {
    	# code...
    	return $this->hasOne(pembeli::class,'pengguna_id');
    }

    public function pemilik()
    {
    	# code... 
    	return $this->hasOne(pemilik::class,'pengguna_id');
    }
}

