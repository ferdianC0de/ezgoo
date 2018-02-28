@extends('admin.layouts.app')


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
            <hr>
            @foreach ($planeschedule as $data)
            <form action="{{ url('admin/plane/updatePlaneschedule', $data->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('put')}}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="code">Asal :</label>
                    <select class="form-control" name="airport_id">
                      <option value="0" disabled selected>{{ $data->from }}</option>
                      @foreach($airport as $key)
                        <b><option value="{{ $key->id }}">{{ $key->airport_name }}</option>
                      @endforeach
                    </select>
                    <input type="hidden" class="form-control asal" id="asal">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="code">Tujuan :</label>
                    <select class="form-control" name="destination">
                      <option value="0" disabled selected>{{ $data->destination }}</option>
                      @foreach($airport as $key)
                        <option value="{{ $key->id }}">{{ $key->airport_name }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" class="form-control from" id="code">
                  <input type="hidden" class="form-control destination" id="codes">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="code">Nama Pesawat :</label>
                    <select class="form-control" name="plane_id">
                      <option value="{{ $data->plane_id }}" disabled selected >{{ $data->plane->plane_name }}</option>
                      @foreach($plane as $key)
                        <option value="{{ $key->id }}">{{ $key->plane_name }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="code">Eco Seat:</label>
                    <input type="text" class="form-control option" id="eco_seat" name="eco_seat" value="{{ $data->eco_seat }}" disabled>
                </div>
              </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <label for="code">Bussiness Seat:</label>
                      <input type="text" class="form-control option" id="bus_seat" name="bus_seat" value="{{ $data->bus_seat }}" disabled>
                  </div>
                </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="code">First Seat:</label>
                        <input type="text" class="form-control option" id="first_seat" name="first_seat" value="{{ $data->first_seat }}" disabled>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="code">Boarding Time:</label>
                        <div class='input-group date'>
                        <input type="text" name="boarding_time" class="form-control datetimepicker" value=" {{ $data->boarding_time }} ">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="code">Duration :</label>
                        <input type="time" name="duration" class="form-control" value="{{ date('H:i', strtotime($data->duration))}}">
                    </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="code">Gate :</label>
                          <input type="text" name="gate" class="form-control" value=" {{ $data->gate }} ">
                      </div>
                    </div>
                </div>
                @endforeach
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>







@endsection
