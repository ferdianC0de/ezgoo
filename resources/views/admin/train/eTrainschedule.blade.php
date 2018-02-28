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
            <hr>
            @foreach($trainschedule as $data)
            <form action="{{ url('admin/train/pcreateTrainschedule') }}" method="post">
                {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="code">Asal :</label>
                    <select class="form-control" name="station_id" required>
                      <option value="0" disabled>{{ $data->from }}</option>
                      @foreach($station as $key)
                        <option value="{{ $key->id }}">{{ $key->station_name }}</option>
                      @endforeach
                    </select>
                    <input type="hidden" class="form-control asal" id="asal">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="code">Tujuan :</label>
                    <select class="form-control" name="destination" required>
                      <option value="0" disabled
                      >{{ $data->destination }}</option>
                      @foreach($station as $key)
                        <option value="{{ $key->id }}">{{ $key->station_name }}</option>
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
                  <label for="code">Nama Kereta Api :</label>
                    <select class="form-control" name="train_id">
                      <option value="0">{{ $data->train->train_name }}</option>
                      @foreach($train as $key)
                        <option value="{{ $key->id }}">{{ $key->train_name }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="code">Eco Seat:</label>
                    <input type="text" class="form-control option" id="eco_seat" name="eco_seat" readonly>
                </div>
              </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <label for="code">Bussiness Seat:</label>
                      <input type="text" class="form-control option" id="bus_seat" name="bus_seat" readonly>
                  </div>
                </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="code">Executive Seat:</label>
                        <input type="text" class="form-control option" id="exec_seat" name="exec_seat" readonly>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="code">Boarding Time:</label>
                        <div class='input-group date'>
                        <input type="text" name="boarding_time" class="form-control datetimepicker" value="{{ $data->boarding_time }}" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="code">Duration :</label>
                        <input type="time" name="duration" class="form-control" placeholder="dd/mm/yy" required>
                    </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="code">platform :</label>
                          <input type="text" name="platform" class="form-control" value="{{ $data->platform }}" required>
                      </div>
                    </div>
                </div>
                @endforeach
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>







@endsection
