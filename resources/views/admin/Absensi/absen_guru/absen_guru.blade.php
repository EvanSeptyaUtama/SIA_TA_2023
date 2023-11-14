@extends('layouts.admin_layouts.app_admin')

@section('title', 'Admin | Absen Guru')

@section('content')
    <div class="m-2">
      <div class="row">
        <h3 class="text-center"><strong> ABSEN GURU</strong></h3>
      </div>
      <div class="row">
        <div class="col">
            <!-----Breadcrumbs--->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('halaman_utama_admin')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Absen Guru</li>
                </ol>
            </nav>
        </div>
      </div>
      <!---Input Absen--->
      <div class="row mt-2">
          <div class="container">

            <div class="card border-dark ">
              <div class="row m-2">
                <div class="col-md-12">
                  <h3><i><u>Input Absensi Guru</u></i></h3>
                  <form action="{{ route('store_absen_guru') }}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="row">
                        <!--Input Foreign key : table guru dan table kelas dan table mata pelajaran-->
                        <div class="col-md-4 mb-2">
                          <div class="form-group ">
                            <label class="col-sm-2 col-label-form"><strong>Guru</strong></label>
                            <select name="guru_id" class="form-control select_guru border-dark" class="col-sm-10" >
                              <option value="">- Pilih Guru -</option> 
                                @foreach ($gurus as $item)
                                    <option value="{{$item->id}}">{{$item->nama_guru}}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group mt-1">
                            <label class="col-sm-2 col-label-form"><strong>Kelas</strong></label>
                            <select name="kelas_id" class="form-control border-dark" class="col-sm-10" >
                              <option value="">- Pilih Kelas -</option>   
                              @foreach ($kelas as $item)
                                    <option value="{{$item->id}}">{{$item->nama_kelas}}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group mt-1">
                            <label class="col-sm-4 col-label-form"><strong>Mata Pelajaran</strong></label>
                            <select name="mata_pelajaran_id" class="form-control border-dark" class="col-sm-10" >
                              <option value="">- Pilih Mata Pelajaran -</option>   
                              @foreach ($mata_pelajarans as $item)
                                    <option value="{{$item->id}}">{{$item->mata_pelajaran}}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <!---Input tanggal dan waktu masuk-->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="tanggal_absen_guru"><strong>Tanggal</strong></label>
                            <input type="date" name="tanggal_absen_guru" id="tanggal_absen_guru" class="form-control border-dark" required>
                          </div>
                          <div class="form-group mt-1">
                            <label class="form-group"><strong>Keterangan</strong></label>
                                <select name="keterangan_guru" class="form-control border-dark">
                                    <option value="#">- Keterangan -</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Alfa">Alfa</option>
                                </select>
                          </div>
                        </div>
                         <!---Input keterangan dan waktu keluar-->
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="waktu_mulai_guru"><strong>Waktu Mulai</strong></label>
                              <input type="time" name="waktu_mulai_guru" id="waktu_mulai_guru" class="form-control border-dark" required>
                            </div>
                            <div class="form-group mt-1">
                              <label for="waktu_selesai_guru"><strong>Waktu Selesai</strong></label>
                              <input type="time" name="waktu_selesai_guru" id="waktu_selesai_guru" class="form-control border-dark" required>
                            </div>
                          </div>
                        <div class="form-group mt-2">
                          <button type="submit" class="btn btn-success "><strong>ABSEN</strong></button>
                        </div>
                      </div>
                      
                  </form>

                </div>
              </div>
            </div>

          </div>
      </div>
      <div class="row mt-2">
        <div class="container">
          <div class="card border-dark ">
            <div class="row m-2">
              <!---Bagian Header : judul, tombol tambah, alert, tombol cari-->
              <div class="row mb-2 justify-content-between">
                <div class="col-md-3 mt-4">
                  <a class="btn btn-success " href="{{url('/Export_excel_absen_guru')}}"> Excel</a>
                </div>
                  <!---Alert-->
                  <div class="mt-2">
                      @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                      @endif
                  </div>
              </div>
              <!---Bagian Body : table dan pagination-->
              <div class="row">
                <div class="table-responsive">
                  <table id="example" class="table table-striped nowrap" style="width:100%">
                      <thead>
                          <tr class="text-center">
                              <th>Tanggal</th>
                              <th>Mulai</th>
                              <th>Selesai</th>
                              <th>Keterangan</th>
                              <th>Guru</th>
                              <th>Kelas</th>
                              <th>Mata Pelajaran</th>
                              <th>Aksi</th>
                            </tr>
                      </thead>
                      <tbody>
                          @foreach ($data_absen_guru as $data)
                            <tr class="text-center">
                              <td>{{$data->tanggal_absen_guru->format('l d F Y')}}</td>
                              <td>{{$data->waktu_mulai_guru->format('h:i A')}}</td>
                              <td>{{$data->waktu_selesai_guru->format('h:i A')}}</td>
                                <td>{{$data->keterangan_guru}}</td>
                                <td>
                                    {{$data->gurus->nama_guru}}
                                </td>
                                <td>
                                    {{$data->kelas->nama_kelas}}
                                </td>
                                <td>
                                  {{$data->mata_pelajarans->mata_pelajaran}}
                              </td>
                                <td class="text-center">
                                    <div class="container">
                                        <div class="row">
                                          <!---Tombol tampil data secara detail--->
                                          <div class="col">
                                            <form action="{{route('tampil_absen_guru', $data)}}" method="get">
                                                <button type="submit" class="btn btn-sm btn-secondary mt-2">
                                                    Detail
                                                </button>
                                            </form>
                                          </div>
                                          <!---Tombol edit--->
                                          <div class="col">
                                            <form onsubmit="return confirm('Apakah anda yakin edit data absen guru ?');"   action="{{route('edit_absen_guru', $data)}}" method="get">
                                                <button type="submit" class="btn btn-sm btn-info mt-2">
                                                    Edit
                                                </button>
                                            </form>
                                          </div>
                                          <!---Tombol hapus--->
                                          <div class="col">
                                            <form onsubmit="return confirm('Apakah anda yakin hapus data absen guru ?');"   action="{{route('hapus_absen_guru', $data->id)}}" method="post">
                                              @method('delete')
                                              @csrf
                                              <button type="submit" class="btn btn-sm btn-danger mt-2">
                                                  Hapus
                                              </button>
                                            </form>
                                          </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
        
    </div>


@endsection