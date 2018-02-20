@extends('layouts.app')

@section('content')
<!--pilihan pesawat-->

<div class="container">
  {{-- <form action="{{ url('booking/order') }}"> --}}
    {{ csrf_field() }}
      {{-- <table class="table">
        <thead>
          <tr>
            <th>No. </th>
            <th>Kode</th>
            <th>Tipe Tiket</th>
            <th>Tanggal</th>
            <th>Status</th>
          </tr>
        </thead> --}}
        {{-- <tbody> --}}
          @if ($datas->isEmpty())
            <td colspan="5">Maaf, anda belum memesan tiket</td>
          @else
        <div class="accordion">
              @foreach ($datas as $data)
                {{-- <div id="data{{$data->id}}" class="lol" href="#datanya{{$data->id}}">
                </div> --}}
                <div class="card">
                  <div class="card-header" id="heading{{$data->id}}">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$data->id}}" aria-expanded="true" aria-controls="collapse{{$data->id}}">
                        Booking {{$data->id }}
                      </button>
                    </h5>
                  </div>
                  <div id="collapse{{$data->id}}" class="collapse" aria-labelledby="heading{{$data->id}}" data-parent="#accordion">
                    <div class="card-body">
                          @inject('heheh', 'App\Http\Controllers\UserController')
                          @php
                          $cih = $heheh->showBooking(Auth::user()->id,$data->id)
                          @endphp
                      {{$cih}}
                    </div>
                  </div>
                </div>

                {{-- <div class="collapse" data-parent="data{{$data->id}}" id="isidata{{$data->id}}"> --}}
                {{-- </div> --}}
          @endforeach
        </div>
        </div>
          @endif
          <div id="accordion">

          </div>
</div>
        {{-- </tbody> --}}
      {{-- </table> --}}
    </div>
  {{-- </form> --}}
</div>

@endsection
