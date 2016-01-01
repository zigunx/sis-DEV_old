<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class mahasiswaRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'id_jurusan' => 'required',
            'nama_mahasiswa' => 'required',
            'tmp_tgl_lahir' => 'required',
            'jenkel' => 'required',
            'agama'=> 'required',
            'ukuranjas' => 'required',
            's_kerja' => 'required',
            's_nikah' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'nama_ortu' => 'required',
            'nama_suis' => 'required',
            'pendidikan_terakhir' => 'required',
            'alamat_skolah' => 'required',
            'persyaratan' => 'required',
        ];
    }

    public function messages() {
        return [
            'id_jurusan.required' => 'jurusan Diperlukan!',
            'nama_mahasiswa.required' => 'Nama mahasiswa Diperlukan!',
            'jenkel' => 'Apakah anda wandu?',
            'tmp_tgl_lahir' => 'Tidak boleh kosong',
            'agama'=> 'required',
            'ukuranjas' => 'required',
            's_kerja' => 'required',
            's_nikah' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'nama_ortu' => 'required',
            'nama_suis' => 'required',
            'pendidikan_terakhir' => 'required',
            'alamat_skolah' => 'required',
            'persyaratan' => 'required',
        ];
    }

}
