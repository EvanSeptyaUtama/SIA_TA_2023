<h3><strong>ABSENSI GURU</strong></h3>
<br>
<h4><strong>Laporan Harian Absen Guru</strong></h4>
<table class="table rounded" >
    <thead>
        <tr class="text-center">
            <th><strong>Tanggal</strong></th>
            <th><strong>Mulai</strong></th>
            <th><strong>Selesai</strong></th>
            <th><strong>Keterangan</strong></th>
            <th><strong>Pengajar</strong></th>
            <th><strong>Kelas</strong></th>
            <th><strong>Mata Pelajaran</strong></th>
          </tr>
    </thead>
    <tbody>
        @foreach ($data_absen_guru as $data)
          <tr class="text-center">
            <td>{{$data->tanggal_absen->format('l d F Y')}}</td>
            <td>{{$data->waktu_mulai->format('h:i A')}}</td>
            <td>{{$data->waktu_selesai->format('h:i A')}}</td>
              <td>{{$data->keterangan_guru}}</td>
              <td>
                  {{$data->pengajar->nama_pengajar}}
              </td>
              <td>
                  {{$data->kelas->nama_kelas}}
              </td>
              <td>
                {{$data->mata_pelajarans->mata_pelajaran}}
            </td>
          </tr>
        @endforeach
    </tbody>
</table>