@extends('layouts.app')

@section('content')
  <form action="{{ url('plane/order') }}" method="post">
    {{ csrf_field() }}
    <button type="submit" name="button">Pesan</button>
    <input type="hidden" name="total" value="{{$total}}">
    <input type="hidden" name="seat" value="{{$seat}}">
    <input type="hidden" name="type" value="st">
    <div class="row">
      <div class="col-md-12">
        @foreach ($planeSchedule as $pS)
          <div class="radio">
            <label>
            <input type="radio" name="go" value="{{ $pS->id }}"></label>
          </div>
          <p>Dari   : {{ $pS->from }}</p>
          <p>Tujuan : {{ $pS->destination }}</p>
          <p>Waktu  : {{date('h:i:s', strtotime($pS->boarding_time))}}</p>
          <p>Gate   : {{ $pS->gate }}</p>
        @endforeach
    </div>
  </form>
@endsection
