<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EZGo</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/datepicker/datepicker3.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/datatables/jquery.dataTables.min.css')}}">
    </head>
    <body>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>EZ</span>Go</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown"><a class="fa fa-cog" href="index.html"></a>
                    <li class="dropdown"><a class="fa fa-sign-out" href="#"></a>
                    </li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <!-- profile -->
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="{{ asset('img/world.png') }}" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
    <!-- profile -->
    <!-- menu -->
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="{{ url('admin')}}"><em class="fa fa-home"></em> Dashboard</a></li>
            <li><a href="{{ URL('admin/users') }}"><em class="fa fa-users"></em> Users</a></li>
            <li><a href="{{ URL('admin/bookingdata') }}"><em class="fa fa-list"></em> Booking Data </a></li>

            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-plane">&nbsp;</em> Pesawat <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="{{ url('admin/plane/airport') }}"><span class="fa fa-arrow-right"></span> Bandara</a>
                    </li>
                    <li>
                        <a class="" href="{{ url('admin/plane/listPlane') }}"><span class="fa fa-arrow-right"></span> Daftar Pesawat</a>
                    </li>
                    <li>
                        <a class="" href="{{ url('admin/plane/planeSchedule') }}"><span class="fa fa-arrow-right"></span> Jadwal Penerbangan </a>
                    </li>
                </ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-train">&nbsp;</em> Kereta Api <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li>
                        <a class="" href="{{ url('admin/train/station') }}"><span class="fa fa-arrow-right">&nbsp;</span> Stasiun</a>
                    </li>
                    <li>
                        <a class="" href="{{ url('admin/train/listTrain')}}"><span class="fa fa-arrow-right">&nbsp;</span> Daftar Kereta</a>
                    </li>
                    <li>
                        <a class="" href="{{ url('admin/train/trainSchedule')}}"><span class="fa fa-arrow-right">&nbsp;</span> Jadwal Keberangkatan</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- menu -->

    @yield('content')

<!--     <footer class="footer" style="padding-top: 60px;">
        <div class="container">
            <span class="text-muted">hai</span>
        </div>
    </footer> -->


        </div><!--/.row-->
    </div>  <!--/.main-->





<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/datepicker/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/datepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
<script type="text/javascript">
@stack('scripts')
$(document).ready(function() {
  $('.data').DataTable();
  $('.datetimepicker').datetimepicker({
    format:'YYYY-MM-DD HH:mm:ss',
  });
  $('.timepicker').datetimepicker({
    format:'HH:mm',
  });
  $('select[name="plane_id"]').on('change', function() {
    var param = $(this).val();
    if(param) {
      $.ajax({
          url: '/plane/ajax/'+param,
          type: "GET",
          dataType: 'JSON',
          success:function(data) {
            console.log(data);
              $.each(data, function(index, obj) {
                $('.option').empty();
                $('#eco_seat').val(obj.eco_seat);
                $('#bus_seat').val(obj.bus_seat);
                $('#first_seat').val(obj.first_seat);
              });
          }
      });
    }else{
        $('select[name="eco"]').empty();
    }
  });
  $('select[name="airport_id"]').on('change', function() {
    param = $(this).val();
    $.ajax({
      url: '/airport/ajax/'+param,
      type: "GET",
      dataType: 'JSON',
      success:function(data) {
        console.log(data);
        $.each(data, function(index, obj) {
          $('.from').empty();
          $('#asal').append('<input type="hidden" name="from" value="'+ obj.airport_name +'">');
          $('#code').append('<input type="text" name="from_code" value="'+ obj.code +'">'+ obj.code +'</input>');
        });
      }
    });
  });
  $('select[name="destination"]').on('change', function() {
    param = $(this).val();
    $.ajax({
      url: '/airport/ajax/'+param,
      type: "GET",
      dataType: 'JSON',
      success:function(data) {
        console.log(data);
        $.each(data, function(index, obj) {
          $('.destination').empty();
          $('#codes').append('<input type="text" name="destination_code" value="'+ obj.code +'">'+ obj.code +'</input>');
        });
      }
    });
  });
  // TRAIN
  $('select[name="train_id"]').on('change', function() {
    var train_id = $(this).val();
    if(train_id) {
      $.ajax({
        url: '/train/ajax/'+train_id,
        type: "GET",
        dataType: 'JSON',
        success:function(data) {
          console.log(data);
            $.each(data, function(index, obj) {
              $('.option').empty();
              $('#eco_seat').val(obj.eco_seat);
              $('#bus_seat').val(obj.bus_seat);
              $('#exec_seat').val(obj.exec_seat);
            });
          }
        });
      }else{
        $('select[name="eco"]').empty();
      }
  });
  $('select[name="station_id"]').on('change', function() {
    param = $(this).val();
    $.ajax({
      url: '/station/ajax/'+param,
      type: "GET",
      dataType: 'JSON',
      success:function(data) {
        console.log(data);
        $.each(data, function(index, obj) {
          $('.from').empty();
          $('#asal').append('<input type="hidden" name="from" value="'+ obj.station_name +'">');
          $('#code').append('<input type="text" name="from_code" value="'+ obj.code +'">'+ obj.code +'</input>');
        });
      }
    });
  });
  $('select[name="destination"]').on('change', function() {
    param = $(this).val();
    $.ajax({
      url: '/airport/ajax/'+param,
      type: "GET",
      dataType: 'JSON',
      success:function(data) {
        console.log(data);
        $.each(data, function(index, obj) {
          $('.destination').empty();
          $('#codes').append('<input type="text" name="destination_code" value="'+ obj.code +'">'+ obj.code +'</input>');
        });
      }
    });
  });
});
</script>
</body>
</html>
