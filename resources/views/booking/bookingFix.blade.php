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
  <input type="hidden" name="class" value="{{$class}}">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="panel panel-info">
            @if ($vehicle == 'plane')
              @for ($i=1; $i <= $totalCount - $total['baby']; $i++)
                <div class="panel-heading">Data penumpang {{$i}}</div>
                <div class="panel-body">
                      <div class="form-group">
                          <label for="exampleInputemail1">Nama Lengkap</label>
                          <input type="text" class="form-control" name="name[]" placeholder="Nama Lengkap">
                      </div>
                </div>
              @endfor
            @elseif($vehicle == 'train')
              @for ($i=1; $i <= $totalCount; $i++)
                <div class="panel-heading">Data penumpang {{$i}}</div>
                <div class="panel-body">
                      <div class="form-group">
                          <label for="exampleInputemail1">Nama Lengkap</label>
                          <input type="text" class="form-control" name="name[]" placeholder="Nama Lengkap">
                      </div>
                </div>
              @endfor
            @endif
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
              <input type="hidden" name="id[]" value="{{$s->id}}">
              <div class="panel-heading">{{$s->from}} ke {{$s->destination}}</div>
              <div class="panel-body">
                <img src="images/kai-logo.jpg" alt="">
                @if ($vehicle == 'plane')
                  <p>{{$s->plane_name}}</p>
                  <p>{{$class}}</p>
                  <p>Gerbang {{$s->gate}}</p>
                @elseif($vehicle == 'train')
                  <p>{{$s->train_name}}</p>
                  <p>{{$class}}</p>
                  <p>Peron {{$s->platform}}</p>
                @endif
                <p>{{ date('d F Y H:i:s', strtotime($s->boarding_time)) }}</p>
                <p>IDR {{number_format($s->$seat * $totalCount, 2, ',','.')}}</p>
              </div>
            @endforeach
          </div>
          <div class="panel panel-info">
          <div class="panel-heading">
            <h4 class="card-text">
              @if ($vehicle == 'plane')
                <p>Total ({{$total['adult']}} Dewasa | {{$total['child']}} Anak - anak | {{$total['baby']}} Bayi)</p>
              @elseif ($vehicle == 'train')
                <p>Total ({{$total['adult']}} Dewasa | {{$total['child']}} Anak - anak)</p>
              @endif
              IDR {{ number_format($fareTotal, 2, ',','.') }}
              @if (Entrust::hasRole(['member','admin']))
               <button type="submit" class="btn btn-primary">Pesan</button>
             @else
               Login sebelum pesan tiket, <a href="{{ url('login') }}"><button type="button" class="btn btn-primary">Login</button> </a>
             @endif
            </h4>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<hr class="half-rule">
@endsection
