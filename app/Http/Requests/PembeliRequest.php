<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PembeliRequest extends Request
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
            'nama'=>'required|string',
            'tgl_lahir'=>'required|string',
            'gender'=>'required|string',
            'alamat'=>'required',
        ];
        if ($this->is('pembeli/simpan')) {
            # code...
            $validasi['no_telp'] = 'required|max:12';
            $validasi['username'] = 'required|min:8';
            $validasi['email'] = 'required|email|max:255|unique:penggunas';
            $validasi['password'] = 'required|confirmed|min:8';
        }
        return $validasi;
    }
}
