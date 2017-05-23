<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BarangRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */ 
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       $validasi=[ 
            'nama_barang'=>'required',
            'merk'=>'required',
            'warna'=>'required',
            'foto'=>'required',
            'jumlah'=>'required|numeric|min:1',
            'harga'=>'required|numeric|min:1',

        ];
        if ($this->is('barang/tambah')) {
            # code...
            $validasi['keterangan'] = 'required';
        }
        return $validasi;
    }
}
