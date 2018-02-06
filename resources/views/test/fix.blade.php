@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Dashboard</div>
                  <div class="panel-body">
                    <form action="{{ url('plane/fixOrder') }}" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="total" value="{{$total}}">
                      <input type="hidden" name="seat" value="{{$seat}}">
                      <input type="hidden" name="type" value="st">
                      @foreach ($planeSchedule as $pS)
                        <input type="hidden" name="go" value="{{ $pS->id }}">
                        <p>Dari   : {{ $pS->from }}</p>
                        <p>Tujuan : {{ $pS->destination }}</p>
                        <p>Waktu  : {{date('h:i:s', strtotime($pS->boarding_time))}}</p>
                        <p>Gate   : {{ $pS->gate }}</p>
                      @endforeach
                      <button type="submit">Pesan</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
