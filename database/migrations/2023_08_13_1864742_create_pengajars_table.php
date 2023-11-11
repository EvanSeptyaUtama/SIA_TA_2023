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
        Schema::create('pengajars', function (Blueprint $table) {
            $table->id();
            $table->integer('nip_pengajar');
            $table->string('nama_pengajar', 50);
            $table->string('foto_pengajar');
            $table->string('no_telp_pengajar');
            $table->enum('jenis_kelamin_pengajar', ['Laki-Laki', 'Perempuan']);
            $table->string('alamat_pengajar');
            $table->string('tempat_lahir_pengajar');
            $table->date('ttl_pengajar');
            $table->string('jabatan_pengajar');
            $table->enum('agama_pengajar', ['Islam', 'Katholik', 'Protestan', 'Hindu', 'Budha', 'Konghucu']);
            $table->string('suku_pengajar');
            $table->string('rt_rw_pengajar');
            $table->string('desa_kelurahan_pengajar');
            $table->string('kecamatan_kota_pengajar');
            $table->string('kode_pos_pengajar');
            $table->timestamps();

             //Foreign : table kelas
             $table->unsignedBigInteger('kelas_id')->nullable();
             $table->foreign('kelas_id')->references('id')->on('kelas')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajars');
    }
};
