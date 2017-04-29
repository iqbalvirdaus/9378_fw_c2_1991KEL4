<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna; 
use Illuminate\Auth\SessionGuard;
use Auth;
class SesiController extends Controller
{
    //
	public function index()
	{
		# code...
		return view('master');
	}

	public function form()
	{
		# code...
		if (Auth::check()) {
			# code...
			return  redirect('/');
		}
		return view('login');
	}
	public function validasi(Request $input)
	{
		# code...
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
		]);	
		$pengguna = Pengguna::where($input->only('username','password'))->first();
		if (! is_null($pengguna)) {
			# code...
			Auth::login($pengguna);
			if (Auth::check()) {
				# code...
				return redirect('/')->with('informasi',"Welcome !!! ".Auth::user()->username);
			}
		}
		return redirect('login')->withErrors(['Pengguna tisak di temukan']);

	}
	public function logout()
	{
		# code...
		if (Auth::check()) {
			# code...
			Auth::logout();
			return redirect('/login')->withErrors(['Silahkan Login Untuk Masuk Kesistem']);
		}else{
			return redirect('/login')->withErrors(['Silahkan Login Terlebih Dahulu']);
		}

	}
}
