@extends('layouts.master')

@section('content')
<div class="panel panel-headline">
    <div class="panel-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                         <form action="{{route('mapel.import')}}" class="form-inline" method="post" enctype="multipart/form-data">
                        @csrf
                        <a href="{{route('home')}}" class="btn btn-secondary col-3">Kembali ke Home</a>
                        <input type="file" name="file" class="form-control-filr col-6" />
                        <input type="submit" class="btn btn-primary btn-block col-3" value="Import" />
                    </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">DASHBOARD</h3>
        <p class="panel-subtitle">Informasi Kelulusan Siswa SMK Negeri 7 Pontianak</p>
    </div>
    <div class="panel-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <p>
                        <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mapel</th>
                                <th>Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                            <tr>
                                <td scope="row">{{$loop->iteration}}</td>
                                <td>{{$d->nama_mapel}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
