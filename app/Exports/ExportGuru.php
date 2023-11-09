<?php

namespace App\Exports;

use App\Models\Guru;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportGuru implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $data_guru = Guru::orderBy('nama_guru', 'asc')->get();
        return view('admin.Master.biodata_guru.data_guru_export_excel', compact('data_guru'));
    }
}
