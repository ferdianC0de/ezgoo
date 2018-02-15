@extends('layouts.app')

@section('content')
<!--pilihan pesawat-->

<div class="container">
  @foreach ($schedule as $s)
      <h3 id="test">Penerbangan tanggal {{date('d-m-Y', strtotime($s->boarding_time))}}</h3>
      <h4>Dari {{$s->from}} ke {{$s->destination}}</h2>
    @break($s)
  @endforeach
  <form action="{{ url('booking/order') }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="vehicle" value="{{$vehicle}}">
    <input type="hidden" name="total" value="{{implode(',',$total)}}">
    <input type="hidden" name="seat" value="{{$seat}}">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            @if ($vehicle == 'plane')
              <th>Pesawat</th>
              <th>Pergi</th>
              <th>Tiba</th>
              <th>Durasi</th>
              <th>Gate</th>
              <th>/orang</th>
            @elseif($vehicle == 'train')
              <th>Kereta</th>
              <th>Pergi</th>
              <th>Tiba</th>
              <th>Durasi</th>
              <th>Peron</th>
              <th>/orang</th>
            @endif
          </tr>
        </thead>
        <tbody>
          @if ($schedule->isEmpty())
            <td colspan="5">Maaf, jadwal dan rute yang dicari tidak ditemukan</td>
          @else
            @if ($vehicle == 'plane')
              @foreach ($schedule as $s)
                <tr>
                  <td>{{ $s->plane_name }}</td>
                  <td>{{ date('h:i:s', strtotime($s->boarding_time))}}</td>
                  <td></td>
                  <td>{{ $s->duration }}</td>
                  <td>{{ $s->gate }}</td>
                  <td>Rp {{ number_format($s->$seat,2, ".", ",") }}</td>
                  <td> <button type="submit" name="go" value="{{$s->id}}">Pesan</button></td>
                </tr>
              @endforeach
            @elseif($vehicle == 'train')
              @foreach ($schedule as $s)
                <tr>
                  <td>{{ $s->train_name }}</td>
                  <td>{{ date('h:i:s', strtotime($s->boarding_time))}}</td>
                  <td></td>
                  <td>{{ $s->duration }}</td>
                  <td>{{ $s->platform }}</td>
                  <td>Rp {{ number_format($s->$seat,2, ".", ",") }}</td>
                  <td> <button type="submit" name="go" value="{{$s->id}}">Pesan</button></td>
                </tr>
              @endforeach
            @endif
          @endif
        </tbody>
      </table>
    </div>
  </form>
</div>

@endsection
