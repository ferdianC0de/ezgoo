@extends('admin.user.index')

@section('datatable')
  {!! $dataTable->table() !!}
  @push('js')
    {!! $dataTable->scripts() !!}
  @endpush
@endsection
