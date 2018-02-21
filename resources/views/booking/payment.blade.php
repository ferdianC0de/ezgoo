@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><b>Payment Via Transfer</b></h4>
      </div>

      <div class="panel-body">
        <form>
          <h4><center>Time until expired: 7h 59m</center></h4>
          <br>
            <h4><center>Ammount of bill</center></h4>
            <h2><center><b>Rp.278.000</b></center></h2>
            <h5><center>*please pay exactly as the price written above to avoid the verification error</center></h5>
              <br>
            <h4><center>And please transfer to:</center></h4>
                <center><img src="images/logo_bca.png" alt=""></center>
            <h5><center>Bank BCA, Bumi Serpong Damai</center></h5>
            <h5><center>CV.Atma widiaksa</center></h5>
            <h4><center><b>0895331152668</b></center></h4>
              <br>
            <h4><center>Order Number</center></h4>
            <h3><center><b>SW20180220</b></center></h3>
        </form>
      </div>
    </div>
      <h5><center>Please Confirm your payment after you tranfered the money <a href="here">Here</a></center></h5>
</div>


@endsection
