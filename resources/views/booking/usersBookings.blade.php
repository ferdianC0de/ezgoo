@extends('layouts.app')

@section('content')
<!--pilihan pesawat-->

<div class="container">
  <form action="{{ url('booking/order') }}" method="post">
    {{ csrf_field() }}
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>No. </th>
            <th>Kode</th>
            <th>Tipe Tiket</th>
            <th>Tanggal</th>
            <th>...</th>
            <th>...</th>
          </tr>
        </thead>
        <tbody>
          @if ($datas->isEmpty())
            <td colspan="5">Maaf, anda belum memesan tiket</td>
          @else
          <tr>
            <td></td>
            <td>{{ "kode" }}</td>
            <td>{{ "tipe" }}</td>
            <td>{{ "tanggal" }}</td>
            <td>{{ "..." }}</td>
            <td>{{ "..." }}</td>
            <td> <button type="submit" name="go" value="{{"a"}}">Pesan</button></td>
          </tr>
          @endif
        </tbody>
      </table>
    </div>
  </form>
</div>

@endsection
