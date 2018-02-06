@extends('admin.layouts.app')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div><br><!--/.row-->

<body>
<!-- content -->


<form  action="{{ URL::to('admin/update/'.$data->id)}}" method="POST">
{{ csrf_field() }}

<input type="hidden" name="_method" value="put">
<label>Title</label>
<p><input type="text" class="form-controller" name="title" value="{{$data->title}}"></p>

<label>Nama Pesawat</label>
<p><input type="text" class="form-controller" name="first_name" value="{{$data->first_name}}"></p>

<label>Eco Seat</label>
<p><input type="text" class="form-controller" name="last_name" value="{{$data->last_name}}"></p>

<label>Bus Seat</label>
<p><input type="text" class="form-controller" name="email" value="{{$data->email}}"></p>

<button class="btn btn-primary" name="submit">TAMBAH</button>

</form>

  </div>
</div>
