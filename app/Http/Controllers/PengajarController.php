<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pengajar;
use Illuminate\Http\Request;
use App\Exports\ExportPengajar;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PengajarController extends Controller
{
   
    public function index_pengajar()
    {
        $kelas = Kelas::all();
        $data_pengajar = Pengajar::all();
        return view('admin.Master.biodata_pengajar.index_pengajar', compact('data_pengajar','kelas'));
    }

    public function tampil_pengajar(Pengajar $data_pengajar)
    {
        return view('admin.Master.biodata_pengajar.tampil_pengajar',compact('data_pengajar'));
    }

    public function store_pengajar(Request $request)
    {
        //Validasi
        $request->validate([
            'nip_pengajar' => 'required',
            'nama_pengajar' => 'required',
            'foto_pengajar' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'no_telp_pengajar' => 'required',
            'jenis_kelamin_pengajar' => 'required',
            'alamat_pengajar' => 'required',
            'tempat_lahir_pengajar' => 'required',
            'ttl_pengajar' => 'required',
            'jabatan_pengajar' => 'required',
            'agama_pengajar' => 'required',
            'suku_pengajar' => 'required',
            'rt_rw_pengajar' => 'required',
            'desa_kelurahan_pengajar' => 'required',
            'kecamatan_kota_pengajar' => 'required',
            'kode_pos_pengajar' => 'required',
        ]);

        $file = $request->file('foto_pengajar');
            $path = time() . '_' . $request->nama_pengajar . '.' . $file->getClientOriginalExtension();

            Storage::disk('local')->put('public/Tenaga_Pengajar/' . $path, file_get_contents($file));

        Pengajar::create([
            'nip_pengajar' => $request->nip_pengajar,
            'nama_pengajar' => $request->nama_pengajar,
            'foto_pengajar' => $path,
            'no_telp_pengajar' => $request->no_telp_pengajar,
            'jenis_kelamin_pengajar' => $request->jenis_kelamin_pengajar,
            'alamat_pengajar' => $request->alamat_pengajar,
            'tempat_lahir_pengajar' => $request->tempat_lahir_pengajar,
            'ttl_pengajar' => $request->ttl_pengajar,
            'jabatan_pengajar' => $request->jabatan_pengajar,
            'agama_pengajar' => $request->agama_pengajar,
            'suku_pengajar' => $request->suku_pengajar,
            'rt_rw_pengajar' => $request->rt_rw_pengajar,
            'desa_kelurahan_pengajar' => $request->desa_kelurahan_pengajar,
            'kecamatan_kota_pengajar' => $request->kecamatan_kota_pengajar,
            'kode_pos_pengajar' => $request->kode_pos_pengajar,
            'kelas_id' => $request->kelas_id
        ]);

        return Redirect::route('index_pengajar')
            ->with('success', 'Berhasil menambahkan data pengajar!!');
    }

    public function edit_pengajar(Pengajar $data_pengajar)
    {
        $kelas_edit = Kelas::all();
        return view('admin.Master.biodata_pengajar.edit_pengajar', compact('data_pengajar','kelas_edit'));
    }
    public function update_pengajar(Request $request, Pengajar $data_pengajar)
    {
        //Validasi
        $request->validate([
            'nip_pengajar' => 'required',
            'nama_pengajar' => 'required',
            'foto_pengajar' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'no_telp_pengajar' => 'required',
            'jenis_kelamin_pengajar' => 'required',
            'alamat_pengajar' => 'required',
            'tempat_lahir_pengajar' => 'required',
            'ttl_pengajar' => 'required',
            'jabatan_pengajar' => 'required',
            'agama_pengajar' => 'required',
            'suku_pengajar' => 'required',
            'rt_rw_pengajar' => 'required',
            'desa_kelurahan_pengajar' => 'required',
            'kecamatan_kota_pengajar' => 'required',
            'kode_pos_pengajar' => 'required',
        ]);

        $file = $request->file('foto_pengajar');
            $path = time() . '_' . $request->nama_pengajar . '.' . $file->getClientOriginalExtension();

            Storage::disk('local')->put('public/Tenaga_Pengajar/' . $path, file_get_contents($file));

       $data_pengajar->update([
            'nip_pengajar' => $request->nip_pengajar,
            'nama_pengajar' => $request->nama_pengajar,
            'foto_pengajar' => $path,
            'no_telp_pengajar' => $request->no_telp_pengajar,
            'jenis_kelamin_pengajar' => $request->jenis_kelamin_pengajar,
            'alamat_pengajar' => $request->alamat_pengajar,
            'tempat_lahir_pengajar' => $request->tempat_lahir_pengajar,
            'ttl_pengajar' => $request->ttl_pengajar,
            'jabatan_pengajar' => $request->jabatan_pengajar,
            'agama_pengajar' => $request->agama_pengajar,
            'suku_pengajar' => $request->suku_pengajar,
            'rt_rw_pengajar' => $request->rt_rw_pengajar,
            'desa_kelurahan_pengajar' => $request->desa_kelurahan_pengajar,
            'kecamatan_kota_pengajar' => $request->kecamatan_kota_pengajar,
            'kode_pos_pengajar' => $request->kode_pos_pengajar,
            'kelas_id' => $request->kelas_id,
        ]);

        return Redirect::route('index_pengajar')
            ->with('success', 'Berhasil mengedit data pengajar!!');
    }

    public function hapus_pengajar(Pengajar $data_pengajar)
    {
        $data_pengajar->delete();
        return Redirect::route('index_pengajar')->with('success','Berhasil menghapus data pengajar!!');
    }

    public function eksport_excel_pengajar()
    {
        return Excel::download(new ExportPengajar, "Pengajar.xlsx");
    }
}
