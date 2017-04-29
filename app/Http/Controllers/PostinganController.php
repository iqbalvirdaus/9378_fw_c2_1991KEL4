<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pemilik;
use App\barang;
use App\kategori;

class PostinganController extends Controller
{
    // 
    public function awal(){
		//return "Hello dari PenggunaController";
		return view('postingan.awal', ['data'=>postingan::all()]);
	}

	public function tambah(){
		//return $this->simpan();
		return view('postingan.tambah');
	}
	public function simpan(Request $input){

		$postingan= new postingan();
		$postingan->nama_postingan=$input->nama_postingan;
		$postingan->password=$input->password;
		$informasi = $postingan->save() ? 'Berhasil simpan data' :'Gagal simpan data';
		return redirect('postingan')->with(['informasi'=>$informasi]);
	}
	public function edit($id){
		$postingan=postingan::find($id);
		return view('postingan.edit')->with(array('postingan' => $postingan ));
	}
	public function lihat($id){
		$postingan = postingan::find($id);
		return view('postingan.lihat')->with(array('postingan' => $postingan ));	
	}
	public function update($id, Request $input){
		$postingan= postingan::find($id);
		$postingan->username=$input->username;
		$postingan->password=$input->password;
		$informasi = $postingan->save()?'Berhasil update data' :'Gagal update data';
		return redirect('postingan')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$postingan=postingan::find($id);
		$informasi = $postingan->delete()?'Berhasil hapus data' :'Gagal hapus data';
		return redirect('postingan')->with(['informasi'=>$informasi]);
	}
}
