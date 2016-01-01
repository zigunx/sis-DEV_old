<?php

use Illuminate\Database\Seeder;

class dump_jurusan extends Seeder
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

       				'nama_jurusan' => '1',
       				'nama_jurusan' => 'D3 - Komputer',
					'tahun_ajaran' => '2015/2016',
			 		
			 		);
		
		DB::table('tbl_jurusan')->insert($ah);
		

    }
}
