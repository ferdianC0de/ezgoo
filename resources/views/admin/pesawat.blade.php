@extends('admin.layouts.app')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <ol class="breadcrumb">
          <li><a href="#">
              <em class="fa fa-home"></em>
              </a></li>
          <li class="active">Pesawat</li>
      </ol>
    </div><br><!--/.row-->

<body>
<div class="row">
	<div class="col-md-4">

<div class="card" style="width: 35rem;">
  <center><img class="card-img-top" src="{{ asset('img/garudaindonesia.png') }}" alt="Card image cap" width="250" height="200"></center>
  <div class="card-block">
   <h4 class="card-title">Garuda Indonesia</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">List Pesawat</a>
  </div> 
 </div>
</div>

<div class="col-md-4">

<div class="card" style="width: 35rem;">
  <center><img class="card-img-top" src="{{ asset('img/lionair.png') }}" alt="Card image cap" width="250" height="200"></center>
  <div class="card-block">
    <h4 class="card-title">Lion Air</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">List Pesawat</a>
  </div> 
 </div>
</div>

<div class="col-md-4">

<div class="card" style="width: 35rem;">
  <center><img class="card-img-top" src="{{ asset('img/sriwijayaair.png') }}" alt="Card image cap" width="250" height="200"></center>
  <div class="card-block">
    <h4 class="card-title">Sriwijaya Air</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">List Pesawat</a>
  </div> 
 </div>
</div>


</div>

@endsection