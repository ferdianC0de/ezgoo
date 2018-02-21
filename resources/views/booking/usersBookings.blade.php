@extends('layouts.app')

@section('content')
<!--pilihan pesawat-->
<div class="container">
          @if ($datas->isEmpty())
            <td colspan="5">Maaf, anda belum memesan tiket</td>
          @else
        <div class="accordion">
              @foreach ($datas as $data)
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading" id="heading{{$data->id}}">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$data->id}}" aria-expanded="true" aria-controls="collapse{{$data->id}}">
                    <h5 class="mb-0">
                        {{ $data->created_at }}
                        <p class="pull-right">{{"aa"}}</p>
                    </h5>
                  </button>
                  </div>

                    <div id="collapse{{$data->id}}" class="collapse" aria-labelledby="heading{{$data->id}}" data-parent="#accordion">
                      <div class="panel-body">
                            @inject('heheh', 'App\Http\Controllers\UserController')
                            @php
                            $cih = $heheh->showBooking(Auth::user()->id,$data->id)
                            @endphp
                            <a href="{{url('admin/booking/'.Auth::user()->id).'/'.$data->id}}">lihat</a>
                      </div>
                    </div>

                </div>
              </div>
              @endforeach
          </form>
        </div>
          @endif
        </div>
@endsection
