<?php

namespace App\Exports;

use App\Models\AbsenGuru;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ExportAbsenGuru implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data_absen_guru = AbsenGuru::orderBy('tanggal_absen_guru', 'asc')->get();
        return view('admin.Absensi.absen_guru.absen_guru_export_excel', compact('data_absen_guru'));
    }
}
