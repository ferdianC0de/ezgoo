@extends('admin.layouts.app');

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
    <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-body">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert-success') }}</strong>
                </div>
            @endif
          <hr>
          <a href="{{ url('admin/plane/cplaneSchedule')}}" class="btn btn-primary pull right"> Tambah Data Jadwal Pesawat</a><br><br>
          <table class="table table-bordered table-bordered data">
              <thead>
              <tr>
                  <th>NO.</th>
                  <th>Bandara</th>
                  <th>Pesawat</th>
                  <th>Asal</th>
                  <th>Tujuan</th>
                  <th>Ekonomi</th>
                  <th>Bisnis</th>
                  <th>First class</th>
                  <th>Jadwal Terbang</th>
                  <th>Durasi</th>
                  <th>Gate</th>
                  <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach($planeSchedule as $data)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->airport->airport_name}}</td>
                      <td>{{ $data->plane->plane_name}}</td>
                      <td>{{ $data->from }}</td>
                      <td>{{ $data->destination }}</td>
                      <td>{{ $data->eco_seat }}</td>
                      <td>{{ $data->bus_seat }}</td>
                      <td>{{ $data->first_seat }}</td>
                      <td>{{ $data->boarding_time }}</td>
                      <td>{{ $data->duration }}</td>
                      <td>{{ $data->gate }}</td>
                      <td>
                          <form action="{{ url('admin/plane/destroyPS', $data->id) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('delete') }}
                              <a href="{{ url('planeschedule.edit',$data->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                              <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>



@endsection
