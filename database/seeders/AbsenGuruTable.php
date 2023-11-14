<?php

namespace Database\Seeders;

use App\Models\AbsenGuru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AbsenGuruTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AbsenGuru::truncate();

        DB::statement('ALTER TABLE users AUTO_INCREMENT = 1');

        DB::table('absen_guru')->insert([
            //Petrus Kaba
            [
                'tanggal_absen_guru' => Carbon::parse('2022-09-05'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Izin',
                'guru_id' => 2,
                'kelas_id' => 1,
                'mata_pelajaran_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2022-10-03'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 2,
                'kelas_id' => 1,
                'mata_pelajaran_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2022-11-07'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 2,
                'kelas_id' => 1,
                'mata_pelajaran_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-02-06'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 2,
                'kelas_id' => 1,
                'mata_pelajaran_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-03-06'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 2,
                'kelas_id' => 1,
                'mata_pelajaran_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-04-03'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 2,
                'kelas_id' => 1,
                'mata_pelajaran_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Bu Sarje
            [
                'tanggal_absen_guru' => Carbon::parse('2022-09-05'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 3,
                'kelas_id' => 2,
                'mata_pelajaran_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2022-10-03'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 3,
                'kelas_id' => 2,
                'mata_pelajaran_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2022-11-07'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Sakit',
                'guru_id' => 3,
                'kelas_id' => 2,
                'mata_pelajaran_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-02-06'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 3,
                'kelas_id' => 2,
                'mata_pelajaran_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-03-06'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 3,
                'kelas_id' => 2,
                'mata_pelajaran_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-04-03'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Izin',
                'guru_id' => 3,
                'kelas_id' => 2,
                'mata_pelajaran_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Madam Dewi
            [
                'tanggal_absen_guru' => Carbon::parse('2022-09-05'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 4,
                'kelas_id' => 3,
                'mata_pelajaran_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2022-10-03'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 4,
                'kelas_id' => 3,
                'mata_pelajaran_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2022-11-07'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 4,
                'kelas_id' => 3,
                'mata_pelajaran_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-02-06'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 4,
                'kelas_id' => 3,
                'mata_pelajaran_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-03-06'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 4,
                'kelas_id' => 3,
                'mata_pelajaran_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-04-03'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 4,
                'kelas_id' => 3,
                'mata_pelajaran_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Bu Darmi
            [
                'tanggal_absen_guru' => Carbon::parse('2022-09-05'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Sakit',
                'guru_id' => 5,
                'kelas_id' => 4,
                'mata_pelajaran_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2022-10-03'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 5,
                'kelas_id' => 4,
                'mata_pelajaran_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2022-11-07'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Sakit',
                'guru_id' => 5,
                'kelas_id' => 4,
                'mata_pelajaran_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-02-06'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 5,
                'kelas_id' => 4,
                'mata_pelajaran_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-03-06'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 5,
                'kelas_id' => 4,
                'mata_pelajaran_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal_absen_guru' => Carbon::parse('2023-04-03'),
                'waktu_mulai_guru' => Carbon::createFromTime(7, 10),
                'waktu_selesai_guru' => Carbon::createFromTime(12, 35),
                'keterangan_guru' => 'Hadir',
                'guru_id' => 5,
                'kelas_id' => 4,
                'mata_pelajaran_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
