<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('tbl_jurusan', function(Blueprint $table)
		{
			$table->integer('id_jurusan', true);
			$table->string('nama_jurusan', 30);
			$table->string('tahun_ajaran', 15);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_jurusan');
	}

}
