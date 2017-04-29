<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class admincontroller extends Controller
{
    //

    public function Index()
    {
    	# code...
    	return	view('admin.index');
    }

}
