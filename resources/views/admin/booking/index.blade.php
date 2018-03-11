@extends('admin.layouts.app')


@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <ol class="breadcrumb">
          <li><a href="#">
              <em class="fa fa-home"></em>
              </a></li>
          <li class="active">Kereta Api</li>
      </ol>
    </div><br><!--/.row-->

<body>
  <div class="row">
    <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>

<table class="table table-striped table-bordered data">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Booking</th>
                <th>Jenis Pesanan</th>
                <!-- <th>Aksi</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($booking as $data)
            <tr>
                <td>1</td>
                <td>{{ date('l,d-M  y', strtotime($data->created_at))}}</td>
                <td>{{$data->vehicle}}</td>
                <!-- <td>
                    <a href="{{ url('admin/edit/'.$data->id)}}" class="fa fa-info-circle"></a>
                    <a href="{{ url('admin/edit/'.$data->id)}}" class="fa fa-minus-circle"></a>
                    <a href="{{ url('admin/edit/'.$data->id)}}" class="fa fa-trash 5x"></a>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection