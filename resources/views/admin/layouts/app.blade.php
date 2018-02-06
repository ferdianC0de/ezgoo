<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EZGo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/datepicker3.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin/styles.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/jquery.dataTables.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/dataTables.bootstrap.css')}}">
    
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
                <div class="profile-usertitle-name">mfahmifadh</div>
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
            <li><a href="{{ url('admin/index')}}"><em class="fa fa-home"></em> Dashboard</a></li>
            <li><a href="/"><em class="fa fa-users"></em> Users</a></li>
            <li><a href="{{ URL('admin/data_pemesan') }}"><em class="fa fa-list"></em> Data Pemesan</a></li>
            
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-plane">&nbsp;</em> Pesawat <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="{{ url('admin/pesawat') }}"><span class="fa fa-arrow-right"></span> List Pesawat</a>
                    </li>
                    <li>
                        <a class="" href="#"><span class="fa fa-arrow-right"></span> Jadwal Penerbangan</a>
                    </li>
                    <li>
                        <a class="" href="#"><span class="fa fa-arrow-right">&nbsp;</span> Tarif</a>
                    </li>
                </ul>
            </li>
            <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-train">&nbsp;</em> Kereta Api <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li>
                        <a class="" href="{{ url('admin/kereta') }}"><span class="fa fa-arrow-right">&nbsp;</span> List Kereta</a>
                    </li>
                    <li>
                        <a class="" href="#"><span class="fa fa-arrow-right">&nbsp;</span> Jadwal Keberangkatan</a>
                    </li>
                    <li>
                        <a class="" href="#"><span class="fa fa-arrow-right">&nbsp;</span> Tarif</a>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable();
    })</script>
    <script type="text/javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>




    </body>
</html>
        

    
