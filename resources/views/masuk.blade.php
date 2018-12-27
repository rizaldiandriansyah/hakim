<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jumbotron Template for Bootstrap</title>
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Posyandu Terpadu</a>
  <form class="form-inline">
            <a class="nav-link js-scroll-trigger" href="/login_user">Logout</a>
  </form>
</nav>
  <div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Selamat Datang di Layanan Posyandu</h1>
          <h5>Selamat Datang {{Session::get('email')}}</h5>
          <p><a class="btn btn-primary btn-lg"  role="button">Daftar Baru &raquo;</a></p> 
          <div>
          <p><a class="btn btn-primary btn-lg"  role="button">Lihat Hasil Pemeriksaan &raquo;</a></p>
          </div>
        </div>
      </div>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

