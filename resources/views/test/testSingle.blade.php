@extends('layouts.app')

@section('content')
  <form action="{{ url('test/order') }}" method="post">
    {{ csrf_field() }}
    <button type="submit" name="button">Pesan</button>
    <input type="hidden" name="vehicle" value="{{$vehicle}}">
    <input type="hidden" name="total" value="{{$total}}">
    <input type="hidden" name="seat" value="{{$seat}}">
    <input type="hidden" name="type" value="{{$type}}">
    <div class="row">
      <div class="col-md-12">
        @foreach ($schedule as $s)
          <div class="radio">
            <label>
            <input type="radio" name="go" value="{{ $s->id }}"></label>
          </div>
          <p>Dari   : {{ $s->from }}</p>
          <p>Tujuan : {{ $s->destination }}</p>
          <p>Waktu  : {{date('h:i:s', strtotime($s->boarding_time))}}</p>
          <p>Gate   : {{ $s->gate }}</p>
          <p>Harga /orang  : {{ $s->$seat }}</p>
        @endforeach
    </div>
  </form>
@endsection
