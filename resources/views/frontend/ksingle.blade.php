@extends('app')

@section('ksingle')
<!DOCTYPE html>
<html>
<head>
    <title>EZGOO</title>
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-inverse">
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		<ul class="nav navbar-nav menu-main">
			<li class="active">
				<a href="" title="Pesawat">Pesawat</a>
			</li>
      <li class="active">
				<a href="" title="Kereta Api">Kereta Api</a>
			</li>
    </ul>
  </div>
</nav>

<!--tanggal & tujuan-->
<center>
  <h3>6 Februari 2018</h3>
</center>
<div class="row">
	<center>
    <h3>
      <div class="col-md-6">Gambir (GMR)</div>
	    <div class="col-md-6">Bandung (BD)</div>
    </h3>
  </center>
</div>

<br>	

<!--pilihan kereta-->
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-2">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kereta Api<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Argo Parahyangan 20</a></li>
            <li><a href="#">Argo Parahyangan 20</a></li>
            <li><a href="#">Argo Parahyangan 20</a></li>
            <li><a href="#">Argo Parahyangan 20</a></li>
          </ul>
        </ul>
      </li>
    </div>
    <div class="col-md-2">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Waktu<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <input type="range" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            </ul>
          </ul>
        </li>
      </div>
    <div class="col-md-2">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Harga<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <input type="range" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            </ul>
          </ul>
        </li>
    </div>
  <div class="col-md-2">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kelas<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">EKONOMI</a></li>
            <li><a href="#">BISNIS</a></li>
			<li><a href="#">EKSEKUTIF</a></li>
          </ul>
        </ul>
      </li>
    </div>
  </div>
</div>

<br>

<div class="container">
  <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-md-4">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">Argo Parahyangan 20</h4>
                <p class="card-text">Subclass C</p>
	              <p class="card-text">Ekonomi</p>
	              <p class="card-text">18.55</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title"></h4>
                <p class="card-text"></p>
	              <p class="card-text"></p>
                <br>
                <br>
                <br>
                <br>
	              <p class="card-text">3jam 34menit</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-block">
        <br>
	        <button type="button" class="btn btn-primary">Pesan Tiket</button>
          <h4 class="card-title">IDR Rp 454.000,00</h4>
          <p class="card-text">19.45</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-md-4">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">Argo Parahyangan 22</h4>
                <p class="card-text">Subclass C</p>
	              <p class="card-text">Bisnis</p>
	              <p class="card-text">18.55</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title"></h4>
                <p class="card-text"></p>
	              <p class="card-text"></p>
                <br>
                <br>
                <br>
                <br>
	              <p class="card-text">3jam 34menit</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-block">
        <br>
	        <button type="button" class="btn btn-primary">Pesan Tiket</button>
          <h4 class="card-title">IDR Rp 450.000,00</h4>
          <p class="card-text">19.45</p>
        </div>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

</body>
</html>