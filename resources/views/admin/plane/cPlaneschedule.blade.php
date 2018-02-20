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
        <form action="{{ url('admin/plane/pcreateSchedule') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">AIRPORT ID:</label>
                <input type="text" class="form-control" id="airport_id" name="airport_id">
            </div>
            <div class="form-group">
                <label for="code">PLANE ID:</label>
                <input type="text" class="form-control" id="plane_id" name="plane_id">
            </div>
            <div class="form-group">
                <label for="city">FROM:</label>
                <input type="text" class="form-control" id="from" name="from">
            </div>
            <div class="form-group">
                <label for="city">DESTINATION:</label>
                <input type="text" class="form-control" id="destination" name="destination">
            </div>
            <div class="form-group">
                <label for="city">BOARDING TIME:</label>
                <input type="datetime-local" class="form-control" id=boarding_time name="boarding_time">
            </div>
            <div class="form-group">
                <label for="city">DURATION:</label>
                <input type="text" class="form-control" id="duration" name="duration">
            </div>
            <div class="form-group">
                <label for="city">GATE:</label>
                <input type="text" class="form-control" id="gate" name="gate">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                <button type="reset" class="btn btn-md btn-danger">Cancel</button>
            </div>
        </form>
      </div>


@endsection
