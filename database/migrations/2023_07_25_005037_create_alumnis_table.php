<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id_alumni');
            $table->string('nama_lengkap',50);
            $table->string('nama_panggilan',50);
            $table->string('email',50)->unique();
            $table->string('telp',20);
            $table->string('jenis_kelamin',50);
            $table->string('id_jurusan',50);
            $table->string('angkatan',15);
            $table->string('id_status',50);
            $table->string('lokasi',50);
            $table->string('tahun_bekerja',50);
            $table->string('domisili',50);
            $table->string('alamat',50);
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
        Schema::dropIfExists('alumnis');
    }
}
