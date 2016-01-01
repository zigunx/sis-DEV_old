<?php

use Illuminate\Database\Seeder;

class dump_mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ah = array(
            'id_jurusan' => '1',
            'nama_mahasiswa' => 'Hardi Agunadi',
            'tmp_tgl_lahir' => 'Wonosobo, 07 Juli 2015',
            'jenkel' => 'Laki-laki',
            
             );
       	
		DB::table('tbl_mahasiswa')->insert($ah);
    }
}
