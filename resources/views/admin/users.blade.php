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
                  <th>NO.</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach($users as $data)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->first_name }} {{ $data->last_name }}</td>
                      <td>{{ $data->email }}</td>
                      <td>
                          <form action="{{ url('admin/plane/destroyPS', $data->id) }}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('delete') }}
                              <a href="#" class="fa fa-info-circle fa-2x"></a>
                              <a href="{{ url('planeschedule.edit',$data->id) }}" class="fa fa-edit fa-2x"></a>
                              <button class="fa fa-trash fa-2x" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"></button>
                          </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>

@endsection
