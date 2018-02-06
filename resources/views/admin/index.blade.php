@extends('admin.layouts.app')



@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><br><!--/.row-->

<body>
<!-- content -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ asset('img/images.png')}}" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="{{ asset('img/images.png')}}" alt="Chicago">
    </div>

    <div class="item">
      <img src="{{ asset('img/images.png')}}" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="fa fa-arrow-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="fa fa-arrow-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>

<div class="row">
  <div class="col-md-4">
    <div class="card">
      <h3 class="card-header">Create New Customers</h3>
    <div class="card-block">
      <form  action="{{ url('admin/create')}}" method="POST">
        {{ csrf_field() }}

        <label>Title</label>
        <p><input type="text" class="form-control" name="title" placeholder="Tittle"></p>

        <label>First Name</label>
        <p><input type="text" class="form-control" name="first_name" placeholder="First Name"></p>

        <label>Last Name</label>
        <p><input type="text" class="form-control" name="last_name" placeholder="Last Name"></p>

        <label>Email</label>
        <p><input type="text" class="form-control" name="email" placeholder="Email"></p>

        <button class="btn btn-primary" name="submit">TAMBAH</button>

        </form> 
    </div>
</div>



  </div>
</div>



@endsection

















