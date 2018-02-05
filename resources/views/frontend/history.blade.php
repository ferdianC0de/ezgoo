@extends('app')

@section('history')
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
        <span class="glyphicon glyphicon-shopping-cart"></span>
      </ul>
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
            <h4>History Pemesanan Anda</h4>
          </div>
          <div class="panel-body">
            <form>
                <table class="table table-bordered">
                    <tr>
                        <td>Booking ID</td>
                        <td>Tanggal</td>
                        <td>Dari</td>
                        <td>Tujuan</td>
                        <td>Status</td>
                    </tr>
                    <tr>
                        <td>PSW-00078</td>
                        <td>05 Feb 2018</td>
                        <td>Ngurah Rai</td>
                        <td>CGK</td>
                        <td>Belum Terkonfirmasi</td>
                    </tr>
                    <tr>
                        <td>PSW-00079</td>
                        <td>07 Feb 2018</td>
                        <td>CGK</td>
                        <td>Ngurah Rai</td>
                        <td>Belum Terkonfirmasi</td>
                    </tr>
                    <tr>
                        <td>PSW-00080</td>
                        <td>09 Feb 2018</td>
                        <td>Ngurah Rai</td>
                        <td>CGK</td>
                        <td>Belum Terkonfirmasi</td>
                    </tr>
                    <tr>
                        <td>PSW-00081</td>
                        <td>11 Feb 2018</td>
                        <td>CGK</td>
                        <td>Ngurah Rai</td>
                        <td>Belum Terkonfirmasi</td>
                    </tr>
                    <tr>
                        <td>PSW-00082</td>
                        <td>13 Feb 2018</td>
                        <td>Ngurah Rai</td>
                        <td>CGK</td>
                        <td>Belum Terkonfirmasi</td>
                    </tr>
                </table>
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