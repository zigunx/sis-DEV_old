<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model {

    //
    protected $table = 'tbl_mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = array('nama_mahasiswa', 'nis', 'id_jurusan');
    public $timestamps = false;

    public function jurusan() {
        return $this->belongsTo('App\Models\jurusan', 'id_jurusan');
    }

    public function persyaratan() {
        return $this->hasMany('App\Models\persyaratan','id_mahasiswa');
    }

}
