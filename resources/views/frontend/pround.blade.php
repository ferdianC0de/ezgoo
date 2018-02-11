@extends('layouts.app')

@section('content')
<!--tanggal&tujuan-->
<center><h3>Rabu, 17 Januari 2018 - Senin, 22 Januari 2018 | 1 Dewasa</h3></center>
<div class="row">
	<center>
    <h3>
      <div class="col-md-6">Jakarta - Cengkareng (CKJ)</div>
	    <div class="col-md-6">Lampung (TKG)</div>
    </h3>
  </center>
</div>

<br>

<!--Rangkuman Pilihan-->
<form>
<div class="row">
<div class="container">
  <div class="panel panel-default">

    <div class="panel-heading">Rangkuman Pilihan</div>
      <center>
        <div class="panel-body">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Pergi : Jakarta (CKG) - Lampung (TKG)</h4>
                  <p class="card-text">Garuda Indonesia</p>
	                <p class="card-text">Transit : Langsung</p>
	                <p class="card-text">Fasilitas : 20kg</p>
	                <p class="card-text">Waktu : 15.25 - 16.20</p>
              </div>
            </div>
          </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">Pulang : Lampung (TKG) - Jakarta (CKG)</h4>
                <p class="card-text">Garuda Indonesia</p>
	              <p class="card-text">Transit : Langsung</p>
	              <p class="card-text">Fasilitas : 20kg</p>
	              <p class="card-text">Waktu : 14.15 - 15.05</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-block">
        <br>
        <br>
          <h4 class="card-title">IDR Rp 454.000,00</h4>
	           <button type="button" class="btn btn-primary">Pesan Tiket</button>
        </div>
      </div>
    </div>
    </center>
  </div>
</div>
</div>
</form>


<br>

<!--dropdown-->
<div class="row">
  <div class="col-md-1"></div>
    <div class="col-md-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Maskapai<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">LION</a></li>
                <li><a href="#">AIRASIA</a></li>
                <li><a href="#">SRIWIJAYA</a></li>
                <li><a href="#">GARUDA INDONESIA</a></li>
            </ul>
          </ul>
        </li>
      </div>
   <div class="col-md-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Waktu<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              00.00 - 00.00
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
  <div class="col-md-2">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pemberhentian<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">TRANSIT</a></li>
              <li><a href="#">LANGSUNG</a></li>
          </ul>
        </ul>
      </li>
  </div>
  <div class="col-md-1">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Maskapai<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">LION</a></li>
              <li><a href="#">AIRASIA</a></li>
              <li><a href="#">SRIWIJAYA</a></li>
              <li><a href="#">GARUDA INDONESIA</a></li>
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
  <div class="col-md-2">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pemberhentian<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">TRANSIT</a></li>
              <li><a href="#">LANGSUNG</a></li>
          </ul>
        </ul>
      </li>
  </div>
</div>

<!--form pilihan-->
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
                    Garuda Indonesia
                      <p class="card-text">Waktu : 05.30 - 06.35</p>
                      <p class="card-text">Transit : Langsung</p>
                      <p class="card-text">Fasilitas : 20kg</p>
                </label>
              </div>
            </div>
              <div class="col-md-2">
                <h4 class="card-title">Rp 450.000,00</h4>
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
                      Sriwijaya Air
                        <p class="card-text">Waktu : 15.35 - 17.00</p>
                        <p class="card-text">Transit : Langsung</p>
                        <p class="card-text">Fasilitas : 20kg</p>
                      </label>
                    </div>
                  </div>
              <div class="col-md-3">
                  <h4 class="card-title">Rp 450.000,00</h4>
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
