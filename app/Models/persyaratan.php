<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class persyaratan extends Model {

    //
    protected $table = 'tbl_persyaratan';
    protected $primaryKey = 'id_persyaratan';
    protected $fillable = array('id_mahasiswa', 'id_jurusan', 'absen', 'tanggal', 'bulan', 'tahun');
    public $timestamps = false;

    public function jurusan() {
        return $this->belongsTo('App\Models\jurusan', 'id_jurusan');
    }

    public function mahasiswa() {
        return $this->belongsTo('App\Models\mahasiswa', 'id_mahasiswa');
    }

    public function scopeGetAbsen($query, $jurusan, $bulan, $tahun) {
        $kampret = DB::select(DB::raw(
                                "SELECT s.`nama_mahasiswa` , s.`id_mahasiswa` , 
                        IFNULL(h.hadir,0) AS hadir,
                        IFNULL(sk.sakit,0) AS sakit,
                        IFNULL(i.ijin,0) AS ijin, 
                        IFNULL(a.alpha,0) AS alpha, 
                        IFNULL(b.bolos,0) AS bolos,
                        IFNULL(d.dispen,0) AS dispen,
                        IFNULL(skr.skorsing,0) AS skorsing, 
                        IFNULL(t.total,0) AS total
                        FROM tbl_mahasiswa s
                        LEFT JOIN
                        (
                            SELECT id_mahasiswa	, COUNT(absen) AS hadir  FROM tbl_persyaratan
                            WHERE absen = 'H' AND tahun = ".$tahun." AND bulan = ".$bulan."
                            GROUP BY id_mahasiswa
                        ) AS h ON h.id_mahasiswa = s.id_mahasiswa
                        LEFT JOIN
                        (
                            SELECT id_mahasiswa	, COUNT(absen) AS alpha  FROM tbl_persyaratan
                            WHERE absen = 'A' AND tahun = ".$tahun." AND bulan = ".$bulan."
                            GROUP BY id_mahasiswa
                        ) AS a ON a.id_mahasiswa = s.id_mahasiswa
                        LEFT JOIN
                        (
                            SELECT id_mahasiswa	, COUNT(absen) AS sakit  FROM tbl_persyaratan
                            WHERE absen = 'S' AND tahun = ".$tahun." AND bulan = ".$bulan."
                            GROUP BY id_mahasiswa
                        ) AS sk ON sk.id_mahasiswa = s.id_mahasiswa
                        LEFT JOIN
                        (
                            SELECT id_mahasiswa	, COUNT(absen) AS ijin  FROM tbl_persyaratan
                            WHERE absen = 'I' AND tahun = ".$tahun." AND bulan = ".$bulan."
                            GROUP BY id_mahasiswa
                        ) AS i ON i.id_mahasiswa = s.id_mahasiswa
                        LEFT JOIN
                        (
                            SELECT id_mahasiswa	, COUNT(absen) AS bolos  FROM tbl_persyaratan
                            WHERE absen = 'B' AND tahun = ".$tahun." AND bulan = ".$bulan."
                            GROUP BY id_mahasiswa
                        ) AS b ON b.id_mahasiswa = s.id_mahasiswa
                        LEFT JOIN
                        (
                            SELECT id_mahasiswa	, COUNT(absen) AS dispen  FROM tbl_persyaratan
                            WHERE absen = 'D' AND tahun = ".$tahun." AND bulan = ".$bulan."
                            GROUP BY id_mahasiswa
                        ) AS d ON d.id_mahasiswa = s.id_mahasiswa
                        LEFT JOIN
                        (
                            SELECT id_mahasiswa	, COUNT(absen) AS skorsing  FROM tbl_persyaratan
                            WHERE absen = 'SK' AND tahun = ".$tahun." AND bulan = ".$bulan."
                            GROUP BY id_mahasiswa
                        ) AS skr ON skr.id_mahasiswa = s.id_mahasiswa
                        LEFT JOIN
                        (
                            SELECT id_mahasiswa	, COUNT(absen) AS total  FROM tbl_persyaratan
                            WHERE  tahun = ".$tahun." AND bulan = ".$bulan."
                            GROUP BY id_mahasiswa
                        ) AS t ON t.id_mahasiswa = s.id_mahasiswa
                        WHERE id_jurusan=".$jurusan
                
        ));
        return $kampret;
    }

}
