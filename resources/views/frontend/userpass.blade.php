@extends('app')

@section('userpass')
<!DOCTYPE html>
<html>
<head>
    <title>EZGOO</title>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">EZGOO</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Halo Udin</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<form>
  <div class="container">
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <center><span class="glyphicon glyphicon-user"><h5>Profile User</span></center></h5>
        </div>
        <div class="panel-body">
          <center>
            <span class="glyphicon glyphicon-user">
              <h3>Udin</h3>
                <h4>Udinudin@gmail.com</h4>
                  <p class="card-text"><a href="userprofil">Ubah Profile</a></p>
                  <p class="card-text"><a href="userpass">Ubah Password</a></p>
                  <p class="card-text"><a href="history">History Pemesanan</a></p>
              </center>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Halo Udin</h4>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Ubah Password</h4>
          </div>
            <div class="panel-body">
              <form>
                <div class="col-md-6">
                  <label for="pw lama">Password Lama</label>
                    <input type="text" class="form-control" id="pw lama" placeholder="Masukkan Password">
                  </label>
                  <label for="pw baru">Password Baru</label>
                    <input type="text" class="form-control" id="pw baru" placeholder="Masukkan Password">
                  </label>
                  <label for="konfirm">Confirm Your New Password</label>
                    <input type="text" class="form-control" id="konfirm" placeholder="Konfirmasi">
                  </label>
                  <br>
                  <p>
                    <button type="button" class="btn btn-primary btn-lg">Save</button>
                    <button type="button" class="btn btn-primary btn-lg">Cancel</button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
</form>



<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

</body>
</html>