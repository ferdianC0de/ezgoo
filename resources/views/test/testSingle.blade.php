@extends('layouts.app')

@section('content')
  @foreach ($planeSchedule as $pS)
    <p>Dari   : {{$pS->from}}</p>
    <p>Tujuan : {{$pS->destination}}</p>
    <p>Waktu  : {{date('h:i:s', strtotime($pS->boarding_time))}}</p>
    <p>Gate   : {{$pS->gate}}</p>
  @endforeach

@endsection
