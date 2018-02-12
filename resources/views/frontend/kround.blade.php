@extends('layouts.app')

@section('content')

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
</div>

<br>
<!--rangkuman pilihan-->
<form>
<div class="container">
  <div class="panel panel-default">

    <div class="panel-heading">Rangkuman Pilihan</div>
    <center>
      <div class="panel-body">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Argo Parahyangan 20</h4>
                   <p class="card-text">Subclass C</p>
	                 <p class="card-text">Ekonomi</p>
	                 <p class="card-text">Pergi : Gambir - Bandung</p>
	                 <p class="card-text">Waktu : 11.30 - 14.53</p>
                </div>
              </div>
            </div>
      <div class="col-md-4">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">Argo Parahyangan 20</h4>
                <p class="card-text">Subclass C</p>
	              <p class="card-text">Ekonomi</p>
	              <p class="card-text">Pulang : Bandung - Gambir</p>
	              <p class="card-text">Waktu : 11.35 - 14.57</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="card-block">
            <br>
            <br>
            <h4 class="card-title">IDR Rp 150.000,00</h4>
	        <button type="button" class="btn btn-primary">Pesan Tiket</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</center>

<br>

<!--dropdown-->
<div class="row">
  <div class="col-md-2">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kereta Api<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Argo Parahyangan 20</a></li>
            <li><a href="#">Argo Parahyangan 21</a></li>
            <li><a href="#">Argo Parahyangan 22</a></li>
          <li><a href="#">Argo Parahyangan 23</a></li>
        </ul>
      </ul>
      </li>
  </div>
  <div class="col-md-1">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Waktu<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <input type="range" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          </ul>
      </ul>
      </li>
  </div>
  <div class="col-md-1">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Harga<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <input type="range" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          </ul>
      </ul>
      </li>
  </div>
  <div class="col-md-1">
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
  <div class="col-md-2">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kereta Api<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Argo Parahyangan 20</a></li>
            <li><a href="#">Argo Parahyangan 21</a></li>
            <li><a href="#">Argo Parahyangan 22</a></li>
            <li><a href="#">Argo Parahyangan 23</a></li>
          </ul>
      </ul>
      </li>
  </div>
  <div class="col-md-1">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Waktu<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <input type="range" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          </ul>
      </ul>
      </li>
  </div>
  <div class="col-md-1">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Harga<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <input type="range" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          </ul>
      </ul>
      </li>
  </div>
  <div class="col-md-1">
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

<!--pilihan kereta-->
<form>
<div class="row">
  <div class="container">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">Pergi</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-9">
                <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Argo Parahyangan 20
                    <p class="card-text">Waktu : 05.30 - 06.35</p>
                    <p class="card-text">Kelas</p>
                    <p class="card-text">Fasilitas : 20kg</p>
                </label>
              </div>
            </div>
              <div class="col-md-2">
                  <h4 class="card-title">Rp 250.000,00</h4>
                  <button type="button" class="btn btn-primary">Pesan Tiket</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">Pulang</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-9">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Argo Parahyangan 21
                      <p class="card-text">Waktu : 15.35 - 17.00</p>
                      <p class="card-text">Kelas</p>
                      <p class="card-text">Fasilitas : 20kg</p>
                    </label>
              </div>
            </div>
              <div class="col-md-3">
                  <h4 class="card-title">Rp 250.000,00</h4>
                  <button type="button" class="btn btn-primary">Pesan Tiket</button>
              </div>
          </div>
        </div>
      </div>
   </div>
</div>
</div>
</form>
@endsection
