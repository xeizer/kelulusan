<html lang="en" class="fullscreen-bg"><head>
	<title>Masuk | Info Kelulusan SMK Negeri 7 Pontianak</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
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
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{asset('admin/assets/img/Rayyan/apple-icon-144x144.png')}}" alt="SMKN 7 Logo"></div>
								<p class="lead">Masuk dengan akun anda2</p>
							</div>
							<form method="POST" action="{{ route('login') }}">
								@csrf

								<div class="form-group row">
									<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Surel') }}</label>

									<div class="col-md-6">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<div class="form-group row">
									<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi') }}</label>

									<div class="col-md-6">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-6 offset-md-4">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

											<label class="form-check-label" for="remember">
												{{ __('Ingatkan Saya') }}
											</label>
										</div>
									</div>
								</div>

								<div class="form-group row mb-0">
									<div class="col-md-8 offset-md-4">
										<button type="submit" class="btn btn-primary">
											{{ __('Masuk') }}
										</button>
										<a class="btn btn-primary" href="{{ route('register') }}">
											{{ __('Daftar') }}
										</a>

										@if (Route::has('password.request'))
											<a class="btn btn-link" href="{{ route('password.request') }}">
												{{ __('Lupa Kata Sandi?') }}
											</a>
										@endif
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">INFORMASI KELULUSAN SMK Negeri 7 Pontianak</h1>
							<p>Team IT SMKN 7 Pontianak</p>
							<!-- <p>Mutia Atmaja, S.Pd & Teguh Firmansyah, S.Pd</p> -->
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body></html>
