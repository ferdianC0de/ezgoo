@extends('layout.app')
@section('tittle')
<title>EzGO - Pemesanan</title>
@stop
@section('pesawat')
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
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputnotelpon1">Email</label/>
                        <input type="namalengkap" class="form-control" placeholder="namalengkap">
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
<div class="panel-heading">Pergi: Soekarno Hatta (CGK) ke Achmad Yani (SRG)</div>
<div class="panel-body">
<label>
<img src="images/icon_batik.png" alt="icon_batik.png">
<p class="card-text">Soekarno Hatta (CGK)</p>
<p class="card-text">Jakarta-Cengkareng Indonesia</p>
  <p class="card-text">Achmad Yani</p>
  <p class="card-text">Semarang Indonesia</p>
  <p class="card-text">IDR 1.246.200 19:50 -> 3j 34 -> 20:55</p>
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
        <div class="panel panel-default">
         <div class="panel-heading">Data penumpang Dewasa 1</div>
         <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="email">
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputnamalengkap1">No.KTP/SIM</label>  
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="email">
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
<div class="panel panel-default">
<div class="panel-heading">Pulang : Achmad Yani (SRG) ke Soekarno Hatta (CGK)</div>
<div class="panel-body">
<label>
<img src="images/icon_lion.png" alt="icon_lion.png">
<p class="card-text">Achmad Yani (CGK)</p>
<p class="card-text">Semarang-Indonesia</p>
  <p class="card-text">Soekarno Hatta (CGK)</p>
  <p class="card-text">Jakarta-Cengkareng Indonesia</p>
  <p class="card-text">IDR 966.000 16:35 -> 3j 34 -> 17:50</p>
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
        <div class="panel panel-default">
         <div class="panel-heading">Data penumpang Dewasa 2</div>
         <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="email">
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputnamalengkap1">No.KTP/SIM</label>  
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="email">
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


<!-- total -->
<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">
<p class="card-text">Total (2 Dewasa, 1 Anak, 1 Bayi) IDR 2.213.800</p>
</div>
</div>
</div>

<!-- button -->
<center>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
<button type="pesansekarang" class="btn btn-default">Pesan Sekarang</button>
</form>
</center>

<!-- penumpang anak 1-->
<form>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
         <div class="panel-heading">Data Anak 1</div>
         <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="email">
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputdate1">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="date">
                    </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
 </div>

 <!-- penumpang anak 1-->
<form>
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
         <div class="panel-heading">Data Penumpang Bayi 1</div>
         <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="email" class="form-control" id="exampleInputemail1" placeholder="email">
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputdate1">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="date">
                    </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
 </div>
@endsection