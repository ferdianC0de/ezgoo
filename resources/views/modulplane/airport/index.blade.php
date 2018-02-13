@extends('layouts.app')
@section('content')
    <section class="main-section">
        <div class="content">
            <h1>Data Bandara</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Airport Name</th>
                    <th>Code</th>
                    <th>city</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datas->airport_name }}</td>
                        <td>{{ $datas->code }}</td>
                        <td>{{ $datas->city }}</td>
                        <td>
                            <form action="{{ route('airport.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a href="{{ route('airport.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
