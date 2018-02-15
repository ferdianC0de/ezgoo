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

<table class="table table-striped table-bordered data">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Booking</th>
                <th>Jenis Pesanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Tanggal Booking</th>
                <th>Jenis Booking</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($booking as $data)
            <tr>
                <td>1</td>
                <td>{{$data->booking_date}}</td>
                <td>{{$data->type}}</td>
                <td>
                    <a href="{{ URL::to('admin/edit/'.$data->id)}}" class="btn btn-success">DETAIL</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



@endsection