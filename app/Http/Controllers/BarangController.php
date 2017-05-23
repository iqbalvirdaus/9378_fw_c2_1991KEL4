<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Requests\BarangRequest;
use Intervention\Image\ImageManagerStatic as Image;
use App\barang;
use App\kategori;
use App\pemilik;
use App\penawaran;
use Auth;

class BarangController extends Controller
{
    //
    public function awal(){
		/*return "Hello dari PenggunaController";*/
		// $pemilik = pemilik::find($id);
		$semuaBarang = barang::select('*')->orderBy('created_at','desc')->get();	 

		return view('barang.awal',compact('semuaBarang'));
		// return view('barang.awal', ['data'=>barang::all()]);
	}

	public function tambah(){

		$kategori =new kategori;
		$pemilik =new pemilik;

		return view('barang.tambah',compact('barang','kategori','pemilik'));
	}
	public function simpan(BarangRequest $input){

		
		$barang = new barang();
		$barang->nama_barang=$input->nama_barang;
		$barang->merk=$input->merk;
		$barang->warna=$input->warna;

		// $file = $input->file('foto');
		// $filename = $file->getClientOriginalName();
		// 

		// if ($input->hasFile('foto')) {
		// 	# code...
		// 	// $file=Input::file('foto');
		// 	// $file->move(public_path()."image/",$file->getClientOriginalName());
		// 	// // $input->file('foto')->move("image/", $filename);
		// 	// // $filename = $file->getClientOriginalName();
		// 	// $barang->foto=$file->getClientOriginalName();

		// 	$foto = $input->file('foto');
		// 	 $filename = $foto->getClientOriginalName();
		// 	 $path = public_path('image/');
		// 	 $create = Image::make($foto);
		// 	 $create->fit(350,350);
		// 	 $create->save($path.$filename);
		// 	 $barang->foto=$filename;
		// }

		$foto=$input->file('foto');
		if ($foto) {
			# code...
			$foto_filename = $foto->getClientOriginalName();
			$foto->move(public_path('image').$foto_filename);
			$barang->foto=$foto_filename;
		}else{
			$foto_filename = 'noimage.jpg';
			$barang->foto=$foto_filename;
		}


	
		$barang->jumlah=$input->jumlah;
		$barang->harga=$input->harga;
		$barang->keterangan=$input->keterangan;
		$barang->kategori_id=$input->kategori_id;
		$barang->pemilik_id = Auth::user()->pemilik->id;

		$informasi = $barang->save() ? 'Berhasil simpan data' :'Gagal simpan data';
		return redirect('barang')->with(['informasi'=>$informasi]);
		return view('barang.tambah',compact('kategori','pemilik'));

		
	}
	public function edit($id){
		$barang = barang::find($id);
		return view('barang.edit')->with(array('barang' => $barang ));
	}
	public function lihat($id)
	{
		# code...

		$penawaranPada = penawaran::where('barang_id',$id)->orderBy('harga_penawaran','desc')->get();
		$penawaranTertinggi = penawaran::where('barang_id',$id)->orderBy('harga_penawaran','desc')->limit(1)->get();
		$barang = barang::find($id);
		return view('barang.lihat',compact('barang','penawaranPada','penawaranTertinggi'));	
		// return $penawaranPada;
		// return	$barang;
	}
	public function update($id, BarangRequest $input){
		$barang= barang::find($id);
		$barang->nama_barang=$input->nama_barang;
		$informasi = $barang->save()?'Berhasil update data' :'Gagal update data';
		return redirect('barang')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$barang = barang::find($id);
		$informasi = $barang->delete() ? 'Berhasil hapus data' :'Gagal hapus data';
		return redirect('barang/punya')->with(['informasi'=>$informasi]);
	}

	function punya()
	{
		 
		$semuaBarang = barang::where('pemilik_id',Auth::user()->pemilik->id)->orderBy('created_at','desc')->get(); 
		return view('barang.punya',compact('semuaBarang'));
	}
	function pantau($id)
	{
		 
		$penawaranPada = penawaran::where('barang_id',$id)->orderBy('harga_penawaran','desc')->get();
		$penawaranTertinggi = penawaran::where('barang_id',$id)->orderBy('harga_penawaran','desc')->limit(1)->get();
		$barang = barang::find($id);
		return view('barang.pantau',compact('barang','penawaranPada','penawaranTertinggi'));	
	}
}
