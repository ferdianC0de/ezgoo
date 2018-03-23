<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	{{-- Vendor  --}}
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist-custom.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker.css') }}">
	@stack('css')
	{{-- Main --}}
	<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
	{{-- Google fonts --}}
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	{{-- Icons --}}
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/img/favicon.png') }}">
</head>

<body>
	{{-- Wrapper --}}
	<div id="wrapper">
		{{-- Navbar --}}
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="{{ asset('admin/img/logo-dark.png') }}" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="fa fa-list"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="badge bg-danger">5</span>
							</a>
							{{-- Messages --}}
							<ul class="dropdown-menu notifications">
								<li>
									<a href="#">
										<div class="row">
											<div class="col-md-1">
												<img src="{{ asset('admin/img/user.png') }}" class="img-circle" alt="Avatar">
											</div>
											<div class="col-md-10">
												<b>Samuel</b>
												<p>Heh Heh Heh Heh Heh...</p>
											</div>
										</div>
									</a>
								</li>
								<li class="footer"><a href="#" class="more">See all message</a></li>
							</ul>
						</li>
						{{-- User --}}
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('admin/img/user.png') }}" class="img-circle" alt="Avatar"> <span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="index.html"><i class="lnr lnr-user"></i> <span>User</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-login.html"><i class="fa fa-plane"></i>Plane</a></li>
									<li><a href="page-login.html"><i class="lnr lnr-train"></i> Train</a></li>
								</ul>
							</div>
						</li>
						<li><a href="index.html"><i class="lnr lnr-cart"></i> <span>Purchases</span></a></li>
						<li><a href="index.html"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
          @yield('content')
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src=" {{ asset('vendor/jquery/jquery.min.js') }}"></script>
	<script src=" {{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src=" {{ asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src=" {{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src=" {{ asset('vendor/chartist/js/chartist.min.js') }}"></script>
	<script src=" {{ asset('vendor/bootstrap-daterangepicker/moment.js') }}"></script>
	<script src=" {{ asset('vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<script src=" {{ asset('admin/js/klorofil-common.js') }}"></script>
	@stack('js')
</body>

</html>
