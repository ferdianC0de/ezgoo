@extends('layouts.app')

@section('content')
<!--pilihan pesawat-->

@push('scripts')
  <script type="text/javascript">
  $('#collapse').on('hidden.bs.collapse', function () {
  var target = '#'+$(this).attr('data-parent');
  $(target).removeClass('collapse-open');
  });

  //on open collapse
  </script>
@endpush
<div class="container">
  @if ($dataP->isEmpty() && $dataT->isEmpty())
    <td colspan="5">Maaf, anda belum memesan tiket</td>
  @else
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        @if (isset($dataP))
          <div class="accordion">
            @foreach ($dataP as $data)
                <div class="panel panel-default">

                  <div class="panel-heading" id="heading{{$data->id}}">
                    <div class="row">
                      <div class="col-md-4">
                        {{$data->created_at}}
                      </div>
                      <div class="col-md-4 col-md-offset-4">
                        <button class="btn btn-info" data-toggle="collapse" data-target="#collapse{{$data->id}}" aria-expanded="true" aria-controls="collapse{{$data->id}}">
                          {{"Rincian"}}
                        </button>
                      </div>
                    </div>
                  </div>

                  <div id="collapse{{$data->id}}" class="collapse" aria-labelledby="heading{{$data->id}}" data-parent="#accordion">
                    <div class="panel-body">
                      @inject('heheh', 'App\Http\Controllers\UserController')
                      @php
                      $cih = $heheh->showBooking(Auth::user()->id,$data->id)
                      @endphp
                      <a href="{{url('booking/'.Auth::user()->id).'/'.$data->id}}">lihat</a>
                    </div>
                  </div>

                </div>
            @endforeach
          </div>

        @endif
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        @if (isset($dataT))
          <div class="accordion">
            @foreach ($dataT as $data)
                <div class="panel panel-default">

                  <div class="panel-heading" id="heading{{$data->id}}">
                    <div class="row">
                      <div class="col-md-4">
                        {{$data->created_at}}
                      </div>
                      <div class="col-md-4 col-md-offset-4">
                        <button class="btn btn-info" data-toggle="collapse" data-target="#collapse{{$data->id}}" aria-expanded="true" aria-controls="collapse{{$data->id}}">
                          {{"Rincian"}}
                        </button>
                      </div>
                    </div>
                  </div>

                  <div id="collapse{{$data->id}}" class="collapse" aria-labelledby="heading{{$data->id}}" data-parent="#accordion">
                    <div class="panel-body">
                      @inject('heheh', 'App\Http\Controllers\UserController')
                      @php
                      $cih = $heheh->showBooking(Auth::user()->id,$data->id)
                      @endphp
                      <a href="{{url('booking/'.Auth::user()->id).'/'.$data->id}}">lihat</a>
                    </div>
                  </div>

                </div>
            @endforeach
          </div>

        @endif
      </div>
    </div>
  </div>
          @endif
        </div>
@endsection
