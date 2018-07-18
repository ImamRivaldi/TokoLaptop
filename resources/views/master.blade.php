<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TOKO LAPTOP</title>
    <link href="/Public-User/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>

    td, th {
        border: 1px solid;
        text-align: center;
    }

    tr:nth-child(even)
    {
      background-color: #d6d3d3;
    }

  </style>
  <body>
    <!-- Awal Navigasi  -->
    <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Yonkou Shop</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ Route('index') }}">Home</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ Route('create') }}">Tambah Data</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ Route('contact') }}">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ Route('print') }}">Cetak</a></li>
      </ul>
      <form class="" action="{{ Route('search') }}" method="get">
        <div class="col-md-3" style="Float: right; margin-top: 7px;">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="Search...">
              <span class="input-group-btn">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>Cari</button>
                </span>
              </span>
          </div>
        </div>
      </form>

    </div>
  </div>
</nav>
<!-- akhir navigasi -->
<!-- Konten -->
<div class="container">
  <!-- <div class="row"> -->
      @yield('content')
  <!-- </div> -->
</div>
<!-- Akhir Konten -->

<!-- Footer -->
  <footer style="position:fixed; left:0; bottom:0; width:100%; text-align:center; background-color:black; color:white; padding:8px;">
       <h4>Copyright &copy; 4B TI REG PAGI BJB 2018</h4>
</footer>
<!-- Akhir -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public-User/js/bootstrap.min.js"></script>
  </body>
</html>
