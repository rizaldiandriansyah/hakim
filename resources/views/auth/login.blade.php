<!doctype html>
<html>
  <head>
    <title>Login Form Posyandu</title>
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <style type="text/css">
body{
    font-size: 120%;
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
    width: 95%;
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
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
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
</nav>
      <!-- Main Section -->
<section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="header">
            <!-- Remove This Before You Start -->
            <h1>Login Your Account</h1>
            <hr>
            @if(session()->has('success'))
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif
            <form class="input-group" action="{{ url('/login') }}" method="post">
                {{ csrf_field() }}
                <div class="input-group">
            <label for="email"></label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email">
        </div>
        <div class="input-group">
            <label for="alamat"></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password"></input>
        </div>
        <div class="input-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </div>
                <p>
                Belum daftar ? <a href="{{url('register')}}" class="btn btn-lg btn-warning">Daftar</a>
                </p>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
  </body>
</html>
