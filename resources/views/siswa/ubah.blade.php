@extends('layouts.master')

@section('content')


<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">DATA SISWA SMK NEGERI 7 PONTIANAK</h3>
        <p class="panel-subtitle">Kelas XII Tahun Pelajaran 2019 - 2020</p>
    </div>
    <div class="panel-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <p>
                        <form action="{{route('siswa.ubah.proses')}}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$datauser->id}}" />
                            <div class="form-group">
                              <label for="name">Nama</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="nama" aria-describedby="helpId" value="{{$datauser->name}}">
                            </div>
                            <div class="form-group">
                              <label for="nisn">NISN</label>
                              <input type="text" name="nisn" id="nisn" class="form-control" placeholder="nisn" aria-describedby="helpId" value="{{$datauser->siswa->nisn}}">
                            </div>
                            <div class="form-group">
                              <label for="password">Password</label>
                              <input type="text" name="password" id="password" class="form-control" placeholder="password" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="tempat">Tempat Lahir</label>
                              <input type="text" name="tempat" id="tempat" class="form-control" placeholder="tempat" aria-describedby="helpId" value="{{$datauser->siswa->tempat_lahir}}">
                            </div>
                            <div class="form-group">
                              <label for="tanggal">Tanggal</label>
                              <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="nama" aria-describedby="helpId" value="{{$datauser->siswa->tanggal_lahir}}">
                            </div>
                            <div class="form-group">
                              <label for="pstudi">Program Studi</label>
                              <input type="text" name="pstudi" id="pstudi" class="form-control" placeholder="nama" aria-describedby="helpId" value="{{$datauser->siswa->pstudi}}">
                            </div>
                            <div class="form-group">
                              <label for="jurusan">Jurusan</label>
                              <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="nama" aria-describedby="helpId" value="{{$datauser->siswa->jurusan}}">
                            </div>
                            <div class="form-group">
                              <label for="kelas">Kelas</label>
                              <input type="text" name="kelas" id="kelas" class="form-control" placeholder="A atau B" aria-describedby="helpId" value="{{$datauser->siswa->kelas}}">
                            </div>
                            <div class="form-group">
                              <label for="keterangan">Keterangan</label>
                              <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="keterangan" aria-describedby="helpId" value="{{$datauser->siswa->keterangan}}">
                            </div>
                            <input type="submit" value="Simpan">
                        </form>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
