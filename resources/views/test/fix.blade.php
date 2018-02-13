@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Dashboard</div>
                  <div class="panel-body">
                    <form action="{{ url('test/fixOrder') }}" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="vehicle" value="{{$vehicle}}">
                      <input type="hidden" name="total" value="{{$total}}">
                      <input type="hidden" name="seat" value="{{$seat}}">
                      <input type="hidden" name="type" value="{{$type}}">
                      @foreach ($schedule as $s)
                        @php
                          $fareTotal += $s->$seat * $total
                        @endphp
                        <input type="hidden" name="id[]" value="{{ $s->id }}">
                        <p>Dari   : {{ $s->from }}</p>
                        <p>Tujuan : {{ $s->destination }}</p>
                        <p>Waktu  : {{date('h:i:s', strtotime($s->boarding_time))}}</p>
                        <p>Gate   : {{ $s->gate }}</p>
                      @endforeach
                      <p>Harga Total   : Rp {{ number_format($fareTotal, 2, ',','.') }}</p>
                      @if (Entrust::hasRole(['member','admin']))
                        <button type="submit">Pesan</button>
                      @else
                        Login sebelum pesan tiket, <a href="{{ url('login') }}"><button type="button" class="btn btn-primary">Login</button> </a>
                      @endif
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
