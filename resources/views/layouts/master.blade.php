<!doctype html>
<html lang="en">

<head>
	<title>SMK N 7 Ptk</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('admin/assets/vendor/chartist/css/chartist-custom.css')}}"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300,600,500" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('admin/assets/img/Rayyan/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{asset('admin/assets/img/Rayyan/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('admin/assets/img/Rayyan/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/Rayyan/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('admin/assets/img/Rayyan/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin/assets/img/Rayyan/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('admin/assets/img/Rayyan/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('admin/assets/img/Rayyan/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/assets/img/Rayyan/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('admin/assets/img/Rayyan/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/assets/img/Rayyan/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/Rayyan/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/img/Rayyan/favicon-16x16.png')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}"> -->
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<img src="{{asset('admin/logo-smk.png')}}"></img>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Pesan 1</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>Pesan 2</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Pesan 3</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Pesan 4</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Pesan 5</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Bantuan</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Cara Menggunakan</a></li>
								<li><a href="#">Unduh Data</a></li>
								<li><a href="#">Keamanan</a></li>
							</ul>
                        </li>

                            <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('logo/android-icon-72x72.png')}}" class="img-circle" alt="Avatar"> <span>{{ Auth::user()->name }}</span><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>Tentang Saya</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Pesan</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="lnr lnr-exit"></i> Keluar</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
                    @role('siswa')
                    <ul class="nav">
						<li><a href="{{route('home')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                    @else
					<ul class="nav">
						<li><a href="{{route('home')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{route('mapel.index')}}" class=""><i class="lnr lnr-code"></i> <span>Mapel</span></a></li>
						<li><a href="{{route('siswa.index')}}" class=""><i class="lnr lnr-chart-bars"></i> <span>Siswa</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-cog"></i> <span>Akun</span></a></li>
						<li><a href="#" class=""><i class="lnr lnr-alarm"></i> <span>Pemberitahuan</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Halaman</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Profile</a></li>
									<li><a href="{{ route('login') }}" class="">Masuk</a></li>
									<li><a href="{{ route('screenlock') }}" class="">Kunci Layar</a></li>
								</ul>
							</div>
						</li>
						<li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tabel</span></a></li>
                    </ul>
                    @endrole
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

		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2020 <a href="#" target="_blank"> - Pak Maja & Pak Teguh - </a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<!-- <script src="{{asset('admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/chartist/js/chartist.min.js')}}"></script> -->
    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    @stack('script')


</body>

</html>
