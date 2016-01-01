<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
		{
		Schema::create('tbl_mahasiswa', function(Blueprint $table)
		{
			$table->integer('id_mahasiswa', true);
			$table->integer('id_jurusan');
			$table->string('nama_mahasiswa', 150);
			$table->string('tmp_tgl_lahir', 50);
			$table->string('jenkel', 50);
			$table->string('agama', 15);
			$table->string('ukuranjas', 3);
			$table->string('s_kerja', 20);
			$table->string('s_nikah', 20);
			$table->string('alamat', 150);
			$table->string('no_hp', 12);
			$table->string('nama_ortu', 50);
			$table->string('nama_suis', 50);
			$table->string('pendidikan_terakhir', 50);
			$table->string('alamat_skolah', 150);
			$table->string('persyaratan', 20);
			$table->timestamps();

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_mahasiswa');
	}

}
