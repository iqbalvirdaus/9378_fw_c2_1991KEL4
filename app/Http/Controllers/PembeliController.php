<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PembeliRequest;
use Auth;
use App\pembeli;
use App\pengguna;
use App\pemilik;

class PembeliController extends Controller
{ 
    //
	public function awal()
    {
		# code...
		$semuaPembeli = pembeli::all();
		return view('pembeli.awal', compact('semuaPembeli'));
	}


	public function tambah()
	{
		# code... 
		// $pengguna = new pengguna;
		return view('pembeli.tambah');
	} 

	public function simpan(pembeliRequest $input)
	{
		# code...
		$pengguna = new Pengguna($input->only('username','password','email','level'));
		
		if ($pengguna->save()) {
			# code...
			$pembeli = new pembeli();
			$pembeli->nama = $input->nama;
			$pembeli->tgl_lahir = $input->tgl_lahir;
			$pembeli->gender = $input->gender;
			$pembeli->alamat = $input->alamat;
			$pembeli->no_telp = $input->no_telp;

			if ($pengguna->pembeli()->save($pembeli)){
			$pemilik = new pemilik();
			$pemilik->nama = $input->nama;
			$pemilik->tgl_lahir = $input->tgl_lahir;
			$pemilik->gender = $input->gender;
			$pemilik->alamat = $input->alamat;
			$pemilik->no_telp = $input->no_telp;
			if ($pengguna->pemilik()->save($pemilik))
				$this->informasi='berhasil Daftar';
			}
			
			 
		} 
		return redirect('/login')->with(['informasi'=>$this->informasi]);
	}

	public function edit()
	{
		# code...
		$pembeli = pembeli::find(Auth::user()->pemilik->id);
		return view('pembeli.edit')->with(array('pembeli' => $pembeli ));
	}
	public function lihat($id)
	{
		# code...
		$pembeli = pembeli::find($id);
		return view('pembeli.lihat')->with(array('pembeli' => $pembeli ));	
	}

	public function update(pembeliRequest $input)
	{
		# code...
		

		$pengguna = pengguna::find(Auth::user()->id);
		$pengguna->email = $input->email;
		$pengguna->level = $input->level;
		$pengguna->password = $input->password;
		
		if ($pengguna->save()) {
			# code...
			$pembeli = pembeli::find(Auth::user()->pembeli->id);
			$pembeli->nama = $input->nama;
			$pembeli->tgl_lahir = $input->tgl_lahir;
			$pembeli->gender = $input->gender;
			$pembeli->alamat = $input->alamat;
			$pembeli->no_telp = $input->no_telp;

			if ($pengguna->pembeli()->save($pembeli)){
			$pemilik = pemilik::find(Auth::user()->pemilik->id);
			$pemilik->nama = $input->nama;
			$pemilik->tgl_lahir = $input->tgl_lahir;
			$pemilik->gender = $input->gender;
			$pemilik->alamat = $input->alamat;
			$pemilik->no_telp = $input->no_telp;
			if ($pengguna->pemilik()->save($pemilik))
				$this->informasi='berhasil Daftar';
			}
		

		$pengguna = new Pengguna($input->only('username','password','email','level'));
		

		
		return redirect('barang')->with(['informasi'=>$this->informasi]);
	}
}

	public function hapus($id)
	{
		# code...
		$pembeli = pembeli::find($id);
		
			if ($pembeli->pengguna()->delete()) {
				# code...
				if ($pembeli->delete()) {
					# code...
					$this->informasi = 'Berhasil hapus data';
				}
			}
		
		return redirect('pembeli')->with(['informasi'=>$this->informasi]);
	}


}
