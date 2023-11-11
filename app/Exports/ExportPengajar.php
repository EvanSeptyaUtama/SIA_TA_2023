<?php

namespace App\Exports;

use App\Models\Pengajar;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportPengajar implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data_pengajar = Pengajar::orderBy('nama_pengajar', 'asc')->get();
        return view('admin.Master.biodata_pengajar.data_pengajar_export_excel', compact('data_pengajar'));
    }
}
