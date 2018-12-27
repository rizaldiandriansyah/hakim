<!DOCTYPE html>
<html lang="en">
<head>
    <title>Posyandu Terpadu</title>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  
  @extends('layouts.app')

  @section('content')
  <body>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Pasien</div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Anda login sebagai <strong>{{ Auth::user()->Biodata->nama }}</strong></p>

                    <img src='{{ asset("images/$biodata->url_foto") }}' class='img-thumbnail' alt='User Image'>
                    <table class="table table-sm">
                      <tbody>
                        <tr>
                          <td class="table-info" width="50px">Nama Lengkap</td>
                          <td>{{ $biodata->nama }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">NO KTP</td>
                          <td>{{ $biodata->no_ktp }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">TTL</td>
                          <td>{{ $biodata->tempat_lahir }}, {{ $biodata->tanggal_lahir }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">no Hp/Telp</td>
                          <td>{{ $biodata->telp }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">alamat</td>
                          <td>{{ $biodata->alamat }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">Desa</td>
                          <td>{{ $biodata->desa }}</td>
                        </tr>
                        <tr>
                          <td class="table-info">Kecamatan</td>
                          <td>{{ $biodata->kecamatan }}</td>
                        </tr>                
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
@endsection