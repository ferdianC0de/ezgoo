@extends('layouts.app')
@section('content')
<section class="main-section">
        <div class="content">
            <h1>Data Bandara</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('airport.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Airport Name:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->airport_name }}">
                </div>
                <div class="form-group">
                    <label for="code">Code:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $datas->code }}">
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ $datas->city }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
