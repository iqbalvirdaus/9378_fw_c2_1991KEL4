<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\transaksi;
use App\barang;
use App\pembeli;
use App\pemilik;
use App\penawaran;
use Auth;


class transaksiController extends Controller
{
    //
    public function awal(){
		
		return view('transaksi.awal', ['data'=>transaksi::all()]); 
	}


	public function deal($id,$id_penawaran,$id_pembeli){
		$barang = barang::find($id);

		// $penawarans = penawaran::find($id_penawaran);
		// $penawarans = penawaran::where('id',$id_penawaran)->get();
		$penawarans = penawaran::select('*')->where('id',$id_penawaran)->get();


		$pembeli = pembeli::find($id_pembeli);

		return view('barang.transaksi',compact('barang','penawarans','pembeli'));
	}

	public function simpan(Request $input){

	
		$transaksi= new transaksi();
		$transaksi->barang_id =$input->barang_id;
		$transaksi->penawaran_id=$input->penawaran_id;
		$transaksi->pembeli_id=$input->pembeli_id;
		$transaksi->pemilik_id = Auth::user()->pemilik->id;
		$transaksi->harga_akhir=$input->harga_akhir;
		$transaksi->lokasi=$input->lokasi;
		$transaksi->status_transaksi=$input->status_transaksi;

		$informasi = $transaksi->save() ? 'Berhasil simpan data' :'Gagal simpan data';
		return redirect('barang/punya')->with(['informasi'=>$informasi]);
	}
	public function edit($id){
		$transaksi=transaksi::find($id);
		return view('transaksi.edit')->with(array('transaksi' => $transaksi ));
	}
	public function update($id, Request $input){
		$transaksi= transaksi::find($id);
		$transaksi->status_transaksi=$input->status_transaksi;
		$informasi = $transaksi->save()?'Berhasil ubah status transaksi ' :'Gagal update data';
		return redirect('transaksi/punya')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$transaksi=transaksi::find($id);
		$informasi = $transaksi->delete() ? 'Berhasil hapus data' :'Gagal hapus data';
		return redirect('transaksi')->with(['informasi'=>$informasi]);
	}
	function punya()
	{
		 
		$semuaTransaksi = transaksi::where('pemilik_id',Auth::user()->pemilik->id)->orderBy('created_at','desc')->get(); 
		return view('transaksi.punya',compact('semuaTransaksi'));
	}
}
