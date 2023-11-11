<h3 class="text-center"><strong>BIODATA PENGAJAR</strong></h3>
<br>
<table class="table">
    <thead class="text-center">
        <tr>
            <th><strong>NIP</strong></th>
            <th><strong>Nama</strong></th>
            <th><strong>No Telepon</strong></th>
            <th><strong>Jenis Kelamin</strong></th>
            <th><strong>Alamat</strong></th>
            <th><strong>Tempat Lahir</strong></th>
            <th><strong>Tanggal Lahir</strong></th>
            <th><strong>Jabatan</strong></th>
            <th><strong>Agama</strong></th>
            <th><strong>Suku</strong></th>
            <th><strong>RT/RW</strong></th>
            <th><strong>Desa/Kelurahan</strong></th>
            <th><strong>Kecamatan/Kota</strong></th>
            <th><strong>Kode Pos</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_pengajar $data)
                <tr>
                <td>{{$data->nip_pengajar}}</td>
                <td>{{$data->nama_pengajar}}</td>
                <td>{{$data->no_telp_pengajar}}</td>
                <td>{{$data->jenis_kelamin_pengajar}}</td>
                <td>{{$data->alamat_pengajar}}</td>
                <td>{{$data->tempat_lahir_pengajar}}</td>
                <td>{{$data->ttl_pengajar}}</td>
                <td>{{$data->jabatan_pengajar}}</td>
                <td>{{$data->agama_pengajar}}</td>
                <td>{{$data->suku_pengajar}}</td>
                <td>{{$data->rt_rw_pengajar}}</td>
                <td>{{$data->desa_kelurahan_pengajar}}</td>
                <td>{{$data->kecamatan_kota_pengajar}}</td>
                <td>{{$data->kode_pos_pengajar}}</td>
                </tr>
       @endforeach
    </tbody>
</table>