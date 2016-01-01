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
        ];
    }

    public function messages() {
        return [
            'id_jurusan.required' => 'jurusan Diperlukan!',
            'nama_mahasiswa.required' => 'Nama mahasiswa Diperlukan!',
        ];
    }

}
