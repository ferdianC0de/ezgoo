@extends('layouts.app')
@section('tittle')
<title>EzGO - Pemesanan</title>
@stop
@section('content')
<center><head>PEMESANAN TIKET</head></center>
<br>
<center>
<td><a href="">Login</a>Ke Akun EzGo anda untuk kemudahan pemesanan</td>
</center>

<form>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
         <div class="panel-heading">Data Kontak Pemesana</div>
         <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Pemesana</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputnotelpon1">Email</label/>
                        <input type="namalengkap" class="form-control" placeholder="namalengkap">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputnamalengkap1">Handphone</label>
                        <input type="namalengkap" class="form-control" placeholder="namalengkap">
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
<div class="panel panel-default">
<div class="panel-heading">Kereta Pergi Jumat, 12 Jan 2018</div>
<div class="panel-body">
<label>
<p class="card-text">Argo Parahyangan 20</p>
  <p class="card-text">Ekonomi</p>
  <p class="card-text">06:15 12 Jan 2018 Bandung (BD)</p>
  <p class="card-text">10:27 12 Jan 2018 Cirebon (CN)</p>
  <p class="card-text">Dewasa (x2) IDR 80.000</p>
  </div>
</label>
</div>
</div>
</div>

<form>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
         <div class="panel-heading">Data Penumpang</div>
         <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">No. Tanda Pengenal</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="email">
                        <p class="card-text">No.KTP/Paspor/SIM/Kartu Pelajar</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputnotelpon1">Nama Penumpang</label/>
                        <input type="namalengkap" class="form-control" placeholder="namalengkap">
                        <p class="card-text">Diisi Sesuai KTP/SIM/Paspor</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputnamalengkap1">Tanggal Lahir</label>
                        <input type="namalengkap" class="form-control" placeholder="namalengkap">
                    </div>

                </div>
            </div>
        </div>
    </div>
 </div>

 <!-- total-->
<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">
<p class="card-text">Total  Dewasa (x2) IDR 160.000</p>
</div>
</div>
</div>

<!-- button -->
<center>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
<button type="pesansekarang" class="btn btn-default">Lanjutka Konfirmasi Pemesanan</button>
</form>
</center>

@endsection
