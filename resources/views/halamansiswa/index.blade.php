@extends('layouts.mastersiswa')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div id="toastr-demo" class="panel">
            <div class="panel-body">
                <!-- CONTEXTUAL -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">PENGUMUMAN</h3>
                        <p class="panel-subtitle">Informasi Kelulusan Siswa SMK Negeri 7 Pontianak</p>
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
                                            <br />
                                            <b>{{Auth::user()->name}}</b><br />
                                            <b>NISN. {{Auth::user()->siswa->nisn}}</b><br />
                                            <b>{{Auth::user()->siswa->jurusan}}</b><br />
                                            </div>
                                            <div class="col-md-9">

                                                <p>Selamat datang di halaman Pengumuman Kelulusan SMK Negeri 7 Pontianak</p>
                                                    <p>
                                                        Sebelum anda mengetahui kelulusan, Anda harus menyetujui persyaratan dibawah ini.
                                                        <ol>
                                                            <li>Mengembalikan buku paket BOS yang dipinjam setelah disampul rapi dan buku dalam keadaan baik</li>
                                                            <li>Tidak melakukan Pawai atau berkumpul</li>
                                                            <li>Melaksanakan Anjuran Pemerintah mengenai Pembatasan Covid-19</li>
                                                            <li>Tidak melakukan Aksi coret-coret seragam sekolah</li>
                                                            <li>Seragam untuk dapat disumbangkan</li>
                                                            <li>Lembar Surat kelulusan yang Anda download dapat anda Cetak dan di CAP di SMK Negeri 7 Pontianak</li>
                                                            <li>Transkrip nilai menyusul</li>
                                                        </ol>
                                                    </p>
                                            </div>
                                        </div>
                                        <br /><br />
                                        @if($boleh==1)

                                        <form action="{{route('cetak')}}" method="POST">
                                            @csrf
                                            <label>Ketik "SAYA SETUJU". jika Anda setuju untuk mematuhi persyaratan diatas</label>
                                            <input type="text" name="setuju" class="form-control" placeholder="ketik persetujuan disini..." required>
                                            @error('pesan')
                                            <p class="form-text text-muted text-danger">
                                            Ketik "SAYA SETUJU". jika Anda setuju untuk mematuhi persyaratan diatas
                                            </p>
                                            @enderror
                                            <input type="submit" class="btn btn-primary btn-block" value="Saya Setuju & Ingin Unduh Surat Kelulusan dalam bentuk PDF">

                                        </form>
                                        @else
                                        <div class="alert alert-info" role="alert">
                                            <strong>Pengumuman Kelulusan dijadwalkan pada: 2 Mei 2020 , 16:00 WIB</strong>
                                        </div>
                                        @endif


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END CONTEXTUAL -->
            </div>
        </div>
    </div>
</div>


@endsection
