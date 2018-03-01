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
            <form action="{{ url('admin/plane/pcreatePlaneschedule') }}" method="post">
                {{ csrf_field() }}
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="code">Asal :</label>
                    <select class="form-control" name="airport_id" required>
                      <option value="0">--Pilih bandara asal--</option>
                      @foreach($airport as $key)
                        <option value="{{ $key->id }}">{{ $key->airport_name }}</option>
                      @endforeach
                    </select>
                    <input type="hidden" class="form-control asal" id="asal">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="code">Tujuan :</label>
                    <select class="form-control" name="destination" required>
                      <option value="0">--Pilih bandara tujuan--</option>
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
                      <option value="0">--Pilih pesawat--</option>
                      @foreach($plane as $key)
                        <option value="{{ $key->id }}">{{ $key->plane_name }}</option>
                      @endforeach
                    </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="code">Kursi Ekonomi:</label>
                    <input type="text" class="form-control option" id="eco_seat" name="eco_seat" readonly>
                </div>
              </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <label for="code">Kursi Bisnis:</label>
                      <input type="text" class="form-control option" id="bus_seat" name="bus_seat" readonly>
                  </div>
                </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="code">Kursi First Class:</label>
                        <input type="text" class="form-control option" id="first_seat" name="first_seat" readonly>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="code">Waktu keberangkatan:</label>
                        <div class='input-group date'>
                        <input type="text" name="boarding_time" class="form-control datetimepicker" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="code">Durasi :</label>
                        <input type="text" name="duration" class="form-control timepicker" required>
                    </div>
                  </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="code">Gate :</label>
                          <input type="text" name="gate" class="form-control" placeholder="Ex : G27" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Batal</button>
                </div>
            </form>
        </div>







@endsection
