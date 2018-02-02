@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6">
      @foreach ($planeScheduleG as $pSG)
        <p>{{$pSG->from}}</p>
        <p>{{$pSG->destination}}</p>
        <p>{{$pSG->boarding_time}}</p>
        <p>{{$pSG->gate}}</p>
      @endforeach
    </div>
    <div class="col-md-6">
      @foreach ($planeScheduleB as $pSB)
        <p>{{$pSB->from}}</p>
        <p>{{$pSB->destination}}</p>
        <p>{{$pSB->boarding_time}}</p>
        <p>{{$pSB->gate}}</p>
      @endforeach
    </div>
  </div>

@endsection
