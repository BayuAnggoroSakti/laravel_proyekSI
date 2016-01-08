<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateWisataRequest extends Request {

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
		return [
			'nama'        => 'required',
            'alamat'      => 'required',
            'latitude'    => 'required|numeric',
            'longtitude'  => 'required|numeric',
            'aff' 	 	  => 'required'
		];
	}

	 public function messages()
    {
        return [
            'nama.required'  => 'Kolom nama harus diisi',
            'alamat.required' => 'Kolom email belum diisi',
            'latitude.numeric' 	 => 'Email tidak sesuai',
            'longtitude.numeric' => 'Level pegawai belum dipilih',
            'alamat.required' => 'Level pegawai belum dipilih',
            'aff.numeric'  => 'Level pegawai tidak sesuai'
        ];
    }

}