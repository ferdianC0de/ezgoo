@extends('layouts.app')

@section('content')
  @foreach ($planeSchedule as $pS)
    <p>{{$pS->from}}</p>
    <p>{{$pS->destination}}</p>
    <p>{{$pS->boarding_time}}</p>
    <p>{{$pS->gate}}</p>
  @endforeach

@endsection
