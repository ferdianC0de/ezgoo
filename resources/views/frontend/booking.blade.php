@extends('layouts.app')

@section('content')

<center>
  <head><h2>PEMESANAN TIKET</h2></head>
</center>
<center>
  <td><h4><a href="login">Login</a> Ke Akun EzGo anda untuk kemudahan pemesanan</h4></td>
</center>
<br>

<form>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-info">
         <div class="panel-heading">Data Kontak Pemesanan</div>
         <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="name" class="form-control" id="exampleInputemail1" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputnotelpon1">Email</label/>
                        <input type="name" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputnamalengkap1">Kewarganegaraan</label>
                        <select class="form-control">
                        <option>Indonesia</option>
                        <option>Surabaya</option>
                        <option>Jogjakarta</option>
                        <option>Magelang</option>
                        <option>Bali</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputkewarganegaraan1">No.Telpon</label>
                        <input type="name" class="form-control" placeholder="No.Telpon">
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

<!-- PERGI -->
<form>
  <div class="container">
    <div class="col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">Pergi : Gambir (GMR) ke Bandung (BD)</div>
        <div class="panel-body">
          <label>
            <img src="images/kai-logo.jpg" alt="">
            <p class="card-text">19 Januari 2018</p>
            <p class="card-text">Argo pembayaran Gambir (GMR) ke Bandung (BD)</p>
            <p class="card-text">Ekonomi</p>
            <p class="card-text">2 Dewasa x  IDR 80.000.00
                1 Bayi x  IDR  0,00</p>
            <p class="card-text">IDR  160.000: 05:05 ->3j 34 05:34 </p>
          </div>
        </label>
      </div>
    </div>
</div>

<!--penumpang 1-->
<form>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-info">
         <div class="panel-heading">Data penumpang Dewasa 1</div>
         <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="Nama Lengkap">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputnamalengkap1">No.KTP/SIM</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="No.KTP/SIM">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputdate1">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="date">
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>



<!-- Pulang -->
<form>
  <div class="container">
    <div class="col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">Pulang: Bandung (BD) ke Gambir (GMR)</div>
        <div class="panel-body">
          <label>
            <img src="images/kai-logo.jpg" alt="">
            <p class="card-text">26 Januari 2018</p>
            <p class="card-text">Argo pembayaran Bandung (BD) ke Gambir (GMR)</p>
            <p class="card-text">Ekonomi</p>
            <p class="card-text">2 Dewasa x  IDR 70.000.00
              1 Bayi x  IDR  0,00</p>
            <p class="card-text">IDR  140.000: 07:35 ->3j 34 10:50 </p>
            <P class="2 Dewasa x 1 Bayi) IDR 300.000">
            </div>
          </label>
        </div>
      </div>
</div>

<!-- penumpang 2-->
<form>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-info">
         <div class="panel-heading">Data penumpang Dewasa 2</div>
          <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="Nama Lengkap">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputnamalengkap1">No.KTP/SIM</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="No.KTP/SIM">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputdate1">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="date">
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>


<!-- total-->
<div class="col-md-6">
<div class="panel panel-info">
<div class="panel-heading">
    <h4 class="card-text">Total (2 Dewasa x 1 Bayi) IDR 300.000</h4>
</div>
</div>
</div>

<!-- button -->
<center>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
<button type="pesansekarang" class="btn btn-primary">Pesan Sekarang</button>
</form>
</center>

<!-- penumpang bayi-->
<form>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-info">
         <div class="panel-heading">Data penumpang Bayi 1</div>
         <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="Nama Lengkap">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputnamalengkap1">No.KTP/SIM</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="No.KTP/SIM">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputdate1">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="date">
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <hr class="half-rule">
@endsection
