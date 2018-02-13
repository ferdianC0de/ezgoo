@extends('layouts.app')

@section('content')
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
            <h4>Ubah Profile</h4>
          </div>
          <div class="panel-body">
            <form>
                <div class="col-md-6">
                    <label for="Dari">Ubah Title</label>
                        <select class="form-control">
                            <option>Tuan</option>
                            <option>Nyonya</option>
                            <option>Nona</option>
                        </select>
                    </label>
                  <label for="nama depan">Ubah Nama Depan</label>
                    <input type="text" class="form-control" id="nama belakang" placeholder="Nama Depan">
                  </label>
                  <label for="nama belakang">Ubah Nama Belakang</label>
                    <input type="text" class="form-control" id="nama belakang" placeholder="Nama Belakang">
                  </label>
                  <label for="email">Alamat Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email">
                  </label>
                  <br>
                  <p>
                    <button type="button" class="btn btn-primary btn-lg">Save
                    </button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>
</form>
@endsection
