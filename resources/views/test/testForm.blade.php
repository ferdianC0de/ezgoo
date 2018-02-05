@extends('layouts.app')

@section('content')
  <form  action="{{url('plane/search')}}" method="post">
    {{ csrf_field() }}
    {{-- Ubah ke round trip ganti value type sama munculin form tanggal pulang--}}
    <input type="hidden" name="type" value="st">
    <p>Kelas</p>
    <input type="text" name="class">
    <p>Dewasa</p>
    <input type="text" name="adult">
    <p>Anak - anak</p>
    <input type="text" name="child">
    <p>Bayi</p>
    <input type="text" name="baby">
    <p>dari</p>
    <input type="text" name="from">
    <p>tujuan</p>
    <input type="text" name="destination">
    <p>tanggal pergi</p>
    <input type="text" name="date">
    <p>tanggal pulang</p>
    <input type="text" name="dateB">
    <button type="submit">cari</button>
  </form>
@endsection
