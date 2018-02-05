@extends('layouts.app')

@section('content')
      <form action="{{ url('plane/order') }}" method="post">
        {{ csrf_field() }}
        <button type="submit" name="button">Pesan</button>
        <input type="hidden" name="total" value="{{$total}}">
        <input type="hidden" name="type" value="rt">
        <div class="row">
          <div class="col-md-6">
            @foreach ($planeScheduleG as $pSG)
              <div class="radio">
                <label>
                <input type="radio" name="go" value="{{ $pSG->id }}"></label>
              </div>
              <p>{{$pSG->from}}</p>
              <p>{{$pSG->destination}}</p>
              <p>{{$pSG->boarding_time}}</p>
              <p>{{$pSG->gate}}</p>
            @endforeach
          </div>
          <div class="col-md-6">
            @foreach ($planeScheduleB as $pSB)
              <div class="radio">
                <label>
                <input type="radio" name="back" value="{{ $pSB->id }}"></label>
              </div>
              <p>{{$pSB->from}}</p>
              <p>{{$pSB->destination}}</p>
              <p>{{$pSB->boarding_time}}</p>
              <p>{{$pSB->gate}}</p>
            @endforeach
          </div>
        </div>
      </form>
@endsection
