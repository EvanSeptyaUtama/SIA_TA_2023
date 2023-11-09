@extends('layouts.admin_layouts.app_admin')

@section('title', 'Data Pengajar')
@section('content')
    <div class="container">
        <div class="row  ">
            <div class="col-2 ">
                <img src="https://img.freepik.com/premium-vector/instagram-social-media-icon-gradient-social-media-logo_197792-4682.jpg?w=2000" class="w-100  " alt="...">
            </div>
            <div class="col-10  pt-4">
                <div>
                    <h1><strong>STAR GENERATION | Yayasan Duta Serega</strong></h1>
                </div>
                <div>
                    <h3><strong>JL. Apt Pranoto, RT.35, No.99A, Sangatta Utara, Kec. Sangatta Utara, Kab. Kutai Timur, Prov. Kalimantan Timur</strong></h3>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center">
            <div class="p-2"><h3><strong>DATA PENGAJAR</strong></h3></div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
@endsection