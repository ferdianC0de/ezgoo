@extends('admin.layouts.app');

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
      <ol class="breadcrumb">
          <li><a href="#">
              <em class="fa fa-home"></em>
              </a></li>
          <li class="active">Data Bandara</li>
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
            <a href="{{ url('admin/plane/createAirport') }}" class="fa fa-plus-circle fa-2x"></a><h3 align="center">DAFTAR BANDARA</h3>
            <hr>
            <table class="table table-striped  table-bordered data">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Airport Name</th>
                    <th>Code</th>
                    <th>City</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($airport as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->airport_name }}</td>
                        <td>{{ $data->code }}</td>
                        <td>{{ $data->city }}</td>
                        <td>
                            <form action="{{ url('admin/plane/destroyAP', $data->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a href="{{ url('admin/plane/editAirport',$data->id) }}" class=" btn btn-sm btn-primary">Update</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
@endsection
