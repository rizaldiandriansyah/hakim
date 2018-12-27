<!doctype html>
<html>
  <head>
    <title>Register Form Posyandu</title>
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <style type="text/css">
body{
    font-size: 95%;
    background: #f8f8ff;
    font-family:arial rounded MT Bold,segoe ui;
}

.header{
    width: 30%;
    margin: 50px auto 0px;
    color: black;
    background: #5F9EA0;
    border: 1px solid #b0c4de;
    border-bottom: none;
    border-radius: 10px 10px 10px 10px;
    padding: 20px;
}
form {
    width: 100%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 10px 10px 10px 10px;
}
.input-group{
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: left;
    margin: -60px;
}
.input-group input {
    height: 40px;
    width: 230%;
    padding: 5px 5px;
    font-size: 15px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: black;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
  </style>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="">Posyandu Terpadu</a>
            <a class="navbar-brand" href="/login">Login Account >></a>
</nav>
  <!-- Main Section -->
<section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="header">
            <!-- Remove This Before You Start -->
            <h3>---Register New Account---</h3>
            <hr>
            @if(session()->has('success'))
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif
            <form action="{{ url('/register') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="input-group">
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus placeholder="Nama Lengkap">
 
                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="input-group">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email Address">
 
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="input-group">
                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
 
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-md-5">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-md-4">
                                <input id="no_ktp" type="text" class="form-control{{ $errors->has('no_ktp') ? ' is-invalid' : '' }}" name="no_ktp" value="{{ old('no_ktp') }}" required autofocus placeholder="No KTP">
 
                                @if ($errors->has('no_ktp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_ktp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="col-md-5">
                                <input id="tempat_lahir" type="text" class="form-control{{ $errors->has('tempat_lahir') ? ' is-invalid' : '' }}" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autofocus placeholder="Tempat Lahir">
 
                                @if ($errors->has('tempat_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="input-group"> 
                            <div class="col-md-4">
                                <input id="tanggal_lahir" type="text" class="form-control{{ $errors->has('tanggal_lahir') ? ' is-invalid' : '' }}" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autofocus placeholder="Tanggal Lahir">
                                <small id="passwordHelpBlock" class="form-text text-danger">
                                 Format: YYYY-MM-DD, contoh 1990-11-29.
                                </small>                                
 
                                @if ($errors->has('tanggal_lahir'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-7">
                                <div class="custom-control custom-radio custom-control-inline mt-2">
                                  <input type="radio" id="customRadioInline1" name="pilih_periksa" class="custom-control-input" value="ibu_hamil">
                                  <label class="custom-control-label" for="customRadioInline1">Ibu Hamil</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline2" name="pilih_periksa" class="custom-control-input" value="bayi">
                                  <label class="custom-control-label" for="customRadioInline2">Bayi</label>
                                </div>
                            </div>
                        </div>
 
                        <div class="input-group">
                            <div class="col-md-4">
                                <input id="telp" type="text" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }}" name="telp" value="{{ old('telp') }}" required autofocus placeholder="No Telp/Handphone">
 
                                @if ($errors->has('telp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="input-group">
                            <div class="col-md-6">
                                <textarea id="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" rows="3" placeholder="Alamat"></textarea>
 
                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-md-5">
                                <input id="desa" type="text" class="form-control{{ $errors->has('desa') ? ' is-invalid' : '' }}" name="desa" value="{{ old('desa') }}" required autofocus placeholder="Desa">
 
                                @if ($errors->has('desa'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('desa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group">
                            <div class="col-md-5">
                                <input id="kecamatan" type="text" class="form-control{{ $errors->has('kecamatan') ? ' is-invalid' : '' }}" name="kecamatan" value="{{ old('kecamatan') }}" required autofocus placeholder="Kecamatan">
 
                                @if ($errors->has('kecamatan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kecamatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7">
                                <input id="url_foto" type="file" class="form-control{{ $errors->has('url_foto') ? ' is-invalid' : '' }}" name="url_foto" value="{{ old('url_foto') }}" required autofocus>
 
                                @if ($errors->has('url_foto'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url_foto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
  </body>
</html>