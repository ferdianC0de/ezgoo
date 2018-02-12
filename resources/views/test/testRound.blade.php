@extends('layouts.app')

@section('content')
      <form action="{{ url('test/order') }}" method="post">
        {{ csrf_field() }}
        <button type="submit" name="button">Pesan</button>
        <input type="hidden" name="vehicle" value="{{$vehicle}}">
        <input type="text" name="total" value="{{$total}}">
        <input type="hidden" name="seat" value="{{$seat}}">
        <input type="hidden" name="type" value="{{$type}}">
        <div class="row">
          <div class="col-md-6">
            @foreach ($scheduleG as $sG)
              <div class="radio">
                <label>
                <input type="radio" name="go" value="{{ $sG->id }}"></label>
              </div>
              <p>Dari   :{{$sG->from}}</p>
              <p>Tujuan :{{$sG->destination}}</p>
              <p>Harga /orang  : Rp. {{ number_format($sG->$seat, 2, ",",".")}}</p>
            @endforeach
          </div>
          <div class="col-md-6">
            @foreach ($scheduleB as $sB)
              <div class="radio">
                <label>
                <input type="radio" name="back" value="{{ $sB->id }}"></label>
              </div>
              <p>Dari   :{{$sB->from}}</p>
              <p>Tujuan :{{$sB->destination}}</p>
              <p>Harga /orang  : Rp. {{ number_format($sB->$seat, 2, ",",".")}}</p>
            @endforeach
          </div>
        </div>
      </form>
@endsection
