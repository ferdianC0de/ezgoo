@extends('layouts.app')
@section('tittle')
<title>{{config('app.name')}} - Pemesanan</title>
@stop
@section('content')

<center>
  <head><h2>PEMESANAN TIKET</h2></head>
</center>

<form action="{{url('booking/fixOrder')}}" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="vehicle" value="{{$vehicle}}">
  <input type="hidden" name="total" value="{{implode(',',$total)}}">
  <input type="hidden" name="seat" value="{{$seat}}">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="panel panel-info">
            @for ($i=1; $i <= $totalCount - $total['baby']; $i++)
              <div class="panel-heading">Data penumpang {{$i}}</div>
              <div class="panel-body">
                    <div class="form-group">
                        <label for="exampleInputemail1">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name[]" placeholder="Nama Lengkap">
                    </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <div class="row">
          <div class="panel panel-info">
            @foreach ($schedule as $s)
              @php
                 $fareTotal += $s->$seat * $totalCount;
              @endphp
              <div class="panel-heading">{{$s->from}} ke {{$s->destination}}</div>
              <div class="panel-body">
                <img src="images/kai-logo.jpg" alt="">
                <p>Nama pesawat</p>
                <p>Kelas</p>
                <p>Gerbang</p>
                <p>{{ date('d F Y H:i:s', strtotime($s->boarding_time)) }}</p>
                <p>IDR {{number_format($s->$seat * $totalCount, 2, ',','.')}}</p>
              </div>
            @endforeach
          </div>
          <div class="panel panel-info">
          <div class="panel-heading">
            <h4 class="card-text">
              <p>Total ({{$total['adult']}} Dewasa | {{$total['child']}} Anak - anak | {{$total['baby']}} Bayi)</p>
              IDR {{ number_format($fareTotal, 2, ',','.') }}
              <button type="submit" class="btn btn-success">Pesan</button>
            </h4>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<hr class="half-rule">
@endsection
