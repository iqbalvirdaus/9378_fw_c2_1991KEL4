<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PenawaranRequest;
use App\penawaran;
use App\barang;
use App\pembeli;
use Auth; 

class PenawaranController extends Controller
{
    // 
    public function awal($id){
		$penawaranPada = barang::all();
		return view('barang.awal',compact('penawaranPada'));
	}

	public function deal(){

		$pembeli = new pembeli;
		$barang = new barang;
		$penawaran = new penawaran;

		// return view('penawaran.tambah');
		// return redirect({{url('transaksi')}});
	}
	public function simpan(PenawaranRequest $input){

	
		$pembeli = new pembeli;
		$penawaran= new penawaran();
		$penawaran->harga_penawaran=$input->harga_penawaran;
		$penawaran->pembeli_id= Auth::user()->pembeli->id;
		$penawaran->barang_id=$input->barang_id;

		$informasi = $penawaran->save() ? 'Berhasil simpan data' :'Gagal simpan data';
		return redirect('barang/lihat/'.$penawaran->barang->id)->with(['informasi'=>$informasi]);
	}
	public function validasi()
	{
		# code...
		$semuaBarang = barang::select('*')->orderBy('created_at','desc')->get();	 

	}
	
}
