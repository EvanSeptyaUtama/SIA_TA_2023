<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_mengajar_gurus', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('hari');

            //Foreign key : table Kelas
            $table->unsignedBigInteger('kelas_id');
            $table->foreign('kelas_id')->references('id')->on('kelas');

            //Foreign key : table Mata Pelajaran
            $table->unsignedBigInteger('mata_pelajaran_id');
            $table->foreign('mata_pelajaran_id')->references('id')->on('mata_pelajarans');

            //Foreign key : table Pengajar
            $table->unsignedBigInteger('pengajar_id');
            $table->foreign('pengajar_id')->references('id')->on('pengajars');

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
        Schema::dropIfExists('jadwal_mengajar_gurus');
    }
};
