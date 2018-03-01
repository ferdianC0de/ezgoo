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
          <a href="{{ url('admin/plane/cplaneSchedule')}}" class="fa fa-plus-circle fa-2x"></a><h3 align="center">JADWAL PENERBANGAN</h3>
          <hr>
          <table class="table table-striped table-bordered data">
              <thead>
              <tr>
                  <th>NO.</th>
                  <th>Asal</th>
                  <th>Tujuan</th>
                  <th>Jadwal Terbang</th>
                  <th>Gate</th>
                  <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach($planeSchedule as $data)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->from }}</td>
                      <td>{{ $data->destination }}</td>
                      <td>{{ $data->boarding_time }}</td>
                      <td>{{ $data->gate }}</td>
                      <td>
                          <form action="{{ url('admin/plane/destroyPS', $data->id) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('delete') }}
                              <a href="{{ url('admin/plane/detailPlaneschedule',$data->id) }}" class="fa fa-info-circle"></a>
                              <a href="{{ url('admin/plane/editPlaneschedule',$data->id) }}" class="fa fa-edit"></a>
                              <button class="fa fa-trash" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"></button>
                          </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>



@endsection
