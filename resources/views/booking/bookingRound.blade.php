@extends('layouts.app')

@section('content')
<!--tanggal & tujuan-->
<center>
</center>

<!--pilihan pesawat-->
<div class="container">
  <form action="{{ url('booking/order') }}" method="post">
    {{ csrf_field() }}
    <button type="submit" name="button">Pesan</button>
    <input type="hidden" name="vehicle" value="{{$vehicle}}">
    <input type="hidden" name="total" value="{{implode(',',$total)}}">
    <input type="hidden" name="seat" value="{{$seat}}">
    <div class="row">
      <div class="col-md-6">
        @foreach ($scheduleG as $s)
            <h4>Dari {{$s->from}} ke {{$s->destination}}<p class="pull-right">{{date('d-m-Y', strtotime($s->boarding_time))}}</p> </h4>
          @break($s)
        @endforeach
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                @if ($vehicle == 'plane')
                  <td></td>
                  <th>Pesawat</th>
                  <th>Pergi</th>
                  <th>Tiba</th>
                  <th>Gate</th>
                  <th>/orang</th>
                @elseif($vehicle == 'train')
                  <td></td>
                  <th>Kereta</th>
                  <th>Pergi</th>
                  <th>Tiba</th>
                  <th>Peron</th>
                  <th>/orang</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @if ($scheduleG->isEmpty())
                <td colspan="5">Maaf, jadwal dan rute yang dicari tidak ditemukan</td>
              @else
                @foreach ($scheduleG as $s)
                  <tr>
                    <td>
                      <div class="radio">
                        <label>
                        <input type="radio" name="go" value="{{ $s->id }}"></label>
                      </div>
                    </td>
                    @if ($vehicle == 'plane')
                      <td>{{$s->plane_name}}</td>
                      <td>{{ date('h:i:s', strtotime($s->boarding_time))}}</td>
                      <td></td>
                      <td>{{ $s->gate }}</td>
                    @elseif($vehicle == 'train')
                      <td>{{$s->train_name}}</td>
                      <td>{{ date('h:i:s', strtotime($s->boarding_time))}}</td>
                      <td></td>
                      <td>{{ $s->platform }}</td>
                    @endif
                    <td>Rp.{{ number_format($s->$seat,2, ".", ",") }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-6">
        @foreach ($scheduleB as $s)
            <h4>Dari {{$s->from}} ke {{$s->destination}} <p class="pull-right">{{date('d-m-Y', strtotime($s->boarding_time))}}</p> </h4>
          @break($s)
        @endforeach
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                @if ($vehicle == 'plane')
                  <td></td>
                  <th>Pesawat</th>
                  <th>Pergi</th>
                  <th>Tiba</th>
                  <th>Gate</th>
                  <th>/orang</th>
                @elseif($vehicle == 'train')
                  <td></td>
                  <th>Kereta</th>
                  <th>Pergi</th>
                  <th>Tiba</th>
                  <th>Peron</th>
                  <th>/orang</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @if ($scheduleB->isEmpty())
                <td colspan="5">Maaf, jadwal dan rute yang dicari tidak ditemukan</td>
              @else
                @foreach ($scheduleB as $s)
                  <tr>
                    <td>
                      <div class="radio">
                        <label>
                        <input type="radio" name="back" value="{{ $s->id }}"></label>
                      </div>
                    </td>
                    @if ($vehicle == 'plane')
                      <td>{{$s->plane_name}}</td>
                      <td>{{ date('h:i:s', strtotime($s->boarding_time))}}</td>
                      <td></td>
                      <td>{{ $s->gate }}</td>
                    @elseif($vehicle == 'train')
                      <td>{{$s->train_name}}</td>
                      <td>{{ date('h:i:s', strtotime($s->boarding_time))}}</td>
                      <td></td>
                      <td>{{ $s->platform }}</td>
                    @endif
                    <td>Rp.{{ number_format($s->$seat,2, ".", ",") }}</td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection
