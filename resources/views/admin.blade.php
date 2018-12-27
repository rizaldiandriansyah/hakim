@extends('layouts.app')
 
@section('content')
<!doctype html>
<html>
  <head>
    <title>Dashboard Admin</title>
  </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Admin</div>
                <form class="form-inline my-2 my-lg-0">
                  <input type="text" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">E-Mail</th>
                          <th scope="col">No KTP</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Desa</th>
                          <th scope="col">Kecamatan</th>
                          <th scope="col">FOTO</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                        @foreach ($users as $user)
                        <?php $i++ ;?>
                        <tr>
                          <th scope="row">{{ $i }}</th>
                          <td>{{ $user->Biodata->nama }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->Biodata->no_ktp }}</td>
                          <td>{{ $user->Biodata->alamat }}</td>
                          <td>{{ $user->Biodata->desa }}</td>
                          <td>{{ $user->Biodata->kecamatan }}</td>
                          <td>
                          <a href="{{asset('images')}}/{{$user->Biodata->url_foto}}" target="_blank">Lihat Foto {{ $user->Biodata->nama }}</a>
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
</html>
@endsection