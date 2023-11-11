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
        Schema::create('absen_guru', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_absen_guru');
            $table->time('waktu_mulai_guru');
            $table->time('waktu_selesai_guru');
            $table->string('keterangan_guru');
            //Foreign key : table Pengajar
            $table->unsignedBigInteger('pengajar_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('pengajar_id')->references('id')->on('pengajars');
            //Foreign key : table kelas
            $table->foreignId('kelas_id')->constrained('kelas')->cascadeOnUpdate()->cascadeOnDelete();
            //Foreign key : table mata pelajaran
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajarans')->cascadeOnUpdate()->cascadeOnDelete();

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
        Schema::dropIfExists('absen_guru');
    }
};
