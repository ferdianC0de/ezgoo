@extends('layouts.app')
@section('content')
    <section class="main-section">
                <div class="content">
            <h1>Data Bandara</h1>
            <hr>
            <form action="{{ route('airport.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Airport Name:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                <div class="form-group">
                    <label for="code">Code:</label>
                    <input type="text" class="form-control" id="code" name="code">
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
