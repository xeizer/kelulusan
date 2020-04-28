@extends('layouts.master')

@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">DASHBOARD</h3>
					<p class="panel-subtitle">Informasi Kelulusan Siswa SMK Negeri 7 Pontianak</p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="card-body">
							@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
							@endif
							<div class="col-md-3">
								<div class="metric">
									<span class="icon"><i class="fa fa-download"></i></span>
									<p>
										<a href="{{route('mapel.index')}}" class="btn btn-primary">Mapel</a>
									</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="metric">
									<span class="icon"><i class="fa fa-download"></i></span>
									<p>
										<a href="{{route('siswa.index')}}" class="btn btn-primary">Siswa</a>
									</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="metric">
									<span class="icon"><i class="fa fa-download"></i></span>
									<p>
										<a href="" class="btn btn-primary">Nilai</a>
									</p>
								</div>
							</div>
						</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
@endsection