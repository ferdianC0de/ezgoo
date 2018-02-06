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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Tanggal</th>
                <th>Aksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Email</th>
                <th>Tanggal</th>
                <th>Aksi</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($customer as $data)
            <tr>
                <td>1</td>
                <td>{{$data ->first_name}}</td>
                <td>{{$data ->last_name}}</td>
                <td>{{$data ->email}}</td>
                <td>{{$data ->created_at}}</td>
                <td>
                    <form action="{{action('AdminController@destroy_data_pemesan',$data->id)}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button></td>
                    </form>
                <td>
                    <a href="{{ URL::to('admin/edit/'.$data->id)}}" class="btn btn-success">EDIT</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



@endsection