@extends('layouts.app')

@section('content')
<!--tanggal & tujuan-->
<center>
</center>

<!--pilihan pesawat-->
<div class="container">
  <form action="{{ url('test/order') }}" method="post">
    {{ csrf_field() }}
    <button type="submit" name="button">Pesan</button>
    <input type="hidden" name="vehicle" value="{{$vehicle}}">
    <input type="hidden" name="total" value="{{$total}}">
    <input type="hidden" name="seat" value="{{$seat}}">
    <input type="hidden" name="type" value="{{$type}}">
    <div class="row">
      <div class="col-md-6">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <td></td>
                <th>Pesawat</th>
                <th>Pergi</th>
                <th>Tiba</th>
                <th>Gate</th>
                <th>/orang</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($scheduleG as $s)
                <tr>
                  <td>
                    <div class="radio">
                      <label>
                      <input type="radio" name="go" value="{{ $s->id }}"></label>
                    </div>
                  </td>
                  <td>{{$s->plane_name}}</td>
                  <td>{{ date('h:i:s', strtotime($s->boarding_time))}}</td>
                  <td></td>
                  <td>{{ $s->gate }}</td>
                  <td>Rp.{{ number_format($s->$seat,2, ".", ",") }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-6">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <td></td>
                <th>Pesawat</th>
                <th>Pergi</th>
                <th>Tiba</th>
                <th>Gate</th>
                <th>/orang</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($scheduleB as $s)
                <tr>
                  <td>
                    <div class="radio">
                      <label>
                      <input type="radio" name="back" value="{{ $s->id }}"></label>
                    </div>
                  </td>
                  <td>{{$s->plane_name}}</td>
                  <td>{{ date('h:i:s', strtotime($s->boarding_time))}}</td>
                  <td></td>
                  <td>{{ $s->gate }}</td>
                  <td>Rp.{{ number_format($s->$seat,2, ".", ",") }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection
