<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model {

    //
    protected $table = 'tbl_mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = array('nama_mahasiswa', 'id_jurusan', 'tmp_tgl_lahir', 'jenkel', 'agama', 'ukuranjas', 's_kerja', 's_nikah', 'alamat', 'no_hp', 'nama_ortu', 'nama_suis', 'pendidikan_terakhir', 'alamat_skolah', 'persyaratan' );
    

    public function jurusan() {
        return $this->belongsTo('App\Models\jurusan', 'id_jurusan');
    }

    public function absensi() {
        return $this->hasMany('App\Models\Absensi','id_mahasiswa');
    }

}
