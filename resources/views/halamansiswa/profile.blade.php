@extends('layouts.mastersiswa')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div id="toastr-demo" class="panel">
            <div class="panel-body">
                <!-- CONTEXTUAL -->
                    <div class="profile-header">
                        <div class="overlay"></div>
                        <div class="profile-main">
                            @if(file_exists('foto/'.Auth::user()->siswa->nisn.'.jpg'))
                                <img src="{{asset('foto/'.Auth::user()->siswa->nisn.'.jpg')}}" width="100px" class="img-circle" alt="Avatar">
                            @else
                                <img src="{{asset('foto/nofoto.png')}}" width="100px" class="img-circle" alt="Avatar">
                            @endif
                            <h3 class="name">{{Auth::user()->name}}</h3>
                            <span class="online-status status-available">NISN. {{Auth::user()->siswa->nisn}}</span>
                        </div>
                        <div class="profile-stat">
                            <div class="row">
                                <div class="col-md-4 stat-item">
                                    Tempat Lahir <span>{{Auth::user()->siswa->tempat_lahir}}</span>
                                </div>
                                <div class="col-md-4 stat-item">
                                    Tanggal Lahir <span>{{Auth::user()->siswa->tanggal_lahir}}</span>
                                </div>
                                <div class="col-md-4 stat-item">
                                    Jurusan <span>{{Auth::user()->siswa->jurusan}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE HEADER -->
                    <!-- PROFILE DETAIL -->
                    <div class="profile-detail">
                        <div class="profile-info">
                            <h4 class="heading">{{Auth::user()->name}}</h4>
                            <ul class="list-unstyled list-justify">
                                <li>Program Studi <span>{{Auth::user()->siswa->pstudi}}</span></li>
                                <li>Jurusan <span>{{Auth::user()->siswa->jurusan}}</span></li>
                                <li>Kelas <span>{{Auth::user()->siswa->kelas}}</span></li>
                            </ul>
                        </div>
                        <div class="profile-info">
                            <h4 class="heading">Social</h4>
                            <ul class="list-inline social-icons">
                                <li><a href="www.facebook.com" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="www.twitter.com" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="www.youtube.com" class="youtube-bg"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END PROFILE DETAIL -->
                <!-- END CONTEXTUAL -->
            </div>
        </div>
    </div>
</div>


@endsection
