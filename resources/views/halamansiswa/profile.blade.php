@extends('layouts.mastersiswa')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div id="toastr-demo" class="panel">
            <div class="panel-body">
                <!-- CONTEXTUAL -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h1 class="panel-title">{{Auth::user()->name}}</h1>
                        <p class="panel-subtitle">Siswa SMK Negeri 7 Pontianak</p>
                    </div>
                    <div class="panel-body">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">

                                    <div class="card-body">
                                        @if($errors->any())
                                        <div class="alert alert-danger">{{$errors->first()}}</div>

                                        @endif
                                        <div class="row">
                                            <div class="col-md-3">

                                            @if(file_exists('foto/'.Auth::user()->siswa->nisn.'.jpg'))
                                            <img src="{{asset('foto/'.Auth::user()->siswa->nisn.'.jpg')}}" width="180px" />
                                            @else
                                            <img src="{{asset('foto/nofoto.png')}}" width="180px"/>
                                            @endif
                                            
                                            </div>
                                            <div class="col-md-9">

                                                <p>Selamat datang di halaman Pengumuman Kelulusan SMK Negeri 7 Pontianak</p>
                                                    <p>
                                                        Ini adalah data-data anda, jika ada perbedaan/kesalahan silahkan hubungi admin.
                                                        <ol>
                                                            <li>Nama                   : {{Auth::user()->name}}</li>
                                                            <li>NISN.                  : {{Auth::user()->siswa->nisn}}</li>
                                                            <li>Kelas                  : XII {{Auth::user()->siswa->kelas}}</li>
                                                            <li>Jurusan                : {{Auth::user()->siswa->jurusan}}</li>
                                                            <li>Program Studi          : {{Auth::user()->siswa->pstudi}}</li>
                                                            <li>Tempat & Tanggal Lahir : {{Auth::user()->siswa->tempat_lahir}}, {{Auth::user()->siswa->tanggal_lahir}}</li>
                                                        </ol>
                                                    </p>
                                                <p>Pengumuman Kelulusan dijadwalkan pada: 2 Mei 2020 , 16:00 WIB</p>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTEXTUAL -->
        <div class="profile-detail">
            <div class="profile-info">
                <h4 class="heading">Tautan</h4>
                <ul class="list-inline social-icons">
                    <li><a href="www.facebook.com" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="www.twitter.com" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="www.youtube.com" class="youtube-bg"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="www.github.com" class="github-bg"><i class="fa fa-github"></i></a></li>
                </ul>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>


@endsection
