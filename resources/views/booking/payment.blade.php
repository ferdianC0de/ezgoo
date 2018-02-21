@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><b>Payment Via Transfer</b></h4>
      </div>

      <div class="panel-body">
        <form>
          <h4><center>Expire pada: 08:00:00</center></h4>
          <br>
            <h4><center>Total tagihan</center></h4>
            <h2><center><b>Rp.278.000</b></center></h2>
            <h5><center>*Mohon bayar sesuai dengan nominal diatas untuk menghindari error verifikasi</center></h5>
              <br>
            <h4><center>Dan harap transfer ke:</center></h4>
                <center><img src="images/logo_bca.png" alt=""></center>
            <h5><center>Bank BCA</center></h5>
            <h5><center>Nama akun bank</center></h5>
            <h4><center><b>Nomor telepon</b></center></h4>
              <br>
        </form>
      </div>
    </div>
      <h5><center>Konfirmasi pembayaran setelah melakukan transfer <a href="#">disini</a></center></h5>
</div>


@endsection
