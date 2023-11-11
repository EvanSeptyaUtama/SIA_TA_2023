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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('nama_guru');
            $table->string('foto_guru');
            $table->string('no_telp');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('alamat_guru');
            $table->string('tempat_lahir');
            $table->date('ttl');
            $table->string('jabatan')->nullable();
            $table->enum('agama', ['Islam', 'Katholik', 'Protestan', 'Hindu', 'Budha', 'Konghucu']);
            $table->string('suku');
            $table->string('rt_rw');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->integer('kode_pos');
            $table->timestamps();

             //Foreign key Table : Kelas
            //  $table->unsignedBigInteger('kelas_id')->nullable();
            //  $table->foreign('kelas_id')->references('id')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
};
