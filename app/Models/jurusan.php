<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model {

    //
    protected $table = 'tbl_jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $fillable = array('nama_jurusan', 'tahun_ajaran');
    public $timestamps = false;

    public function mahasiswa() {
        return $this->hasMany('App\Models\mahasiswa');
    }

    public function absensi() {
        return $this->hasMany('App\Models\Absensi');
    }

    public function scopeDropdownjurusan($query) {
        $data = array();
        $eselon = $query->select(array('id_jurusan', 'nama_jurusan'))->get();
        if (count($eselon) > 0) {
            foreach ($eselon as $ese) {
                $data[] = array('id' => $ese->id_jurusan, 'label' => $ese->nama_jurusan);
            }
        }
        return $data;
    }

}
