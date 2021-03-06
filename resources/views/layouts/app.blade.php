<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GymLife - @yield('pageTitle')</title>
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="{{ asset('css/mainstyle.css') }}" rel="stylesheet">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	@yield('styles')
	@yield('metas')
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="/"><span>Gym</span>Bud-e</a>
				<ul class="nav navbar-top-links navbar-right">
					@if(Auth::check())
						<li class="dropdown">
							<a href="{{ route('logout') }}"><em class="fa fa-power-off" style="color:white;">&nbsp;</em></a>
						</li>
					@endif
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			@if (Auth::check())
				<div class="profile-userpic">
					<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">{{ $user->name }}</div>
					<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
				</div>
			@else
				<div class="profile-userpic">
					<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">User</div>
					<div class="profile-usertitle-status"><span class="indicator label-danger"></span>Offline</div>
				</div>
			@endif
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fas fa-tachometer-alt">&nbsp;</em> Dashboard</a></li>
			<li><a href="{{ route('stats') }}"><em class="fas fa-chart-bar">&nbsp;</em> Statistic</a></li>
			<li><a href="elements.html"><em class="fas fa-comments">&nbsp;</em> Forum</a></li>
			<li class="parent ">
				@if(Auth::check())
					<a data-toggle="collapse" href="#sub-item-1">
						<em class="fas fa-user">&nbsp;</em>User<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fas fa-caret-down"></em></span>
					</a>
					<ul class="children collapse" id="sub-item-1">
						<li><a class="" href="#">
							<span class="fas fa-arrow-right">&nbsp;</span> Account
						</a></li>
						<li>
							<a href="{{ route('logout') }}"><em class="fa fa-power-off">&nbsp;</em> Logout</a>
						</li>
					</ul>
				@else
					<a href="{{ route('login') }}"><em class="fas fa-sign-in-alt">&nbsp;</em> Login</a>
					<a href="{{ route('register') }}"><em class="fas fa-sign-in-alt">&nbsp;</em> Register</a>
				@endif
			</li>
		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    	@yield('content')
	</div>	<!--/.main-->
	<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	@yield('scripts')
</body>
</html>