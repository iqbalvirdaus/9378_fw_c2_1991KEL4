<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\barang;
class CariController extends Controller
{
    //
    public function search(Request $request)
    {
    	# code...
    	$query = $request->nama_barang;
    	$hasil = barang::where('nama_barang','LIKE','%'. $query .'%')->paginate(10);
    	return view('result', compact('hasil','query'));
    }

}
