<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\kategori;
class KategoriController extends Controller
{
    //
    public function awal(){
		/*return "Hello dari PenggunaController";*/
		return view('kategori.awal', ['data'=>kategori::all()]);
	}

	public function tambah(){

		return view('kategori.tambah');
	}
	public function simpan(Request $input){

		$this->validate($input,[
			'nama_kategori'=>'required',
		]);

		$kategori= new kategori();
		$kategori->nama_kategori=$input->nama_kategori;
		$informasi = $kategori->save() ? 'Berhasil simpan data' :'Gagal simpan data';
		return redirect('kategori')->with(['informasi'=>$informasi]);
	}
	public function edit($id){
		$kategori=kategori::find($id);
		return view('kategori.edit')->with(array('kategori' => $kategori ));
	}
	public function update($id, Request $input){
		$kategori= kategori::find($id);
		$kategori->nama_kategori=$input->nama_kategori;
		$informasi = $kategori->save()?'Berhasil update data' :'Gagal update data';
		return redirect('kategori')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$kategori=kategori::find($id);
		$informasi = $kategori->delete() ? 'Berhasil hapus data' :'Gagal hapus data';
		return redirect('kategori')->with(['informasi'=>$informasi]);
	}
}
