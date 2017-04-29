<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TransaksiRequest extends Request
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
            'lokasi'=>'required',
        ];
        if ($this->is('transaksi/tambah')) {
            # code...
            $validasi['waktu'] = 'required';
        }
        return $validasi;
    }
}
