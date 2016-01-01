<?php

use Illuminate\Database\Seeder;
use App\User;

class TblKepegawaianTableSeeder extends Seeder {

	public function run()
	{
		// User::truncate();
		User::create([
			'nama_pegawai' => 'Admin',
			'status' => 'admin',
			'username' => 'admin',
			'password' => Hash::make( 'password' ),

		]);

	}

}
