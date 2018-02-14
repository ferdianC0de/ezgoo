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
  <div class="col-md-12">
    <div class="card">
      <h3 class="card-header">Members</h3>
    <div class="card-block">
      <table class="table">
        <thead>
          <tr>
            <td>Nama</td>
            <td>Nama Depan</td>
            <td>Email</td>
            <td>Dll</td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->email}}</td>
            <td></td>
            <td></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
</div>
  </div>
</div>
@endsection
