@extends('layouts.master')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div id="toastr-demo" class="panel">
            <div class="panel-body">
                <!-- CONTEXTUAL -->
                <h4>Input Data Mata Pelajaran</h4>
                    <form action="{{route('mapel.import')}}" class="form-inline" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">   
                            <input type="file" name="file" class="form-control-file" />
                            <span class="input-group-btn"><button class="btn btn-primary btn-toastr" type="submit" value="Import">Import</button></span>
                            <a href="{{route('home')}}" class="btn btn-secondary btn-toastr">Kembali ke Home</a>
                        </div>
                    </form>
                <!-- END CONTEXTUAL -->
            </div>
        </div>
    </div>
</div>

<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">DAFTAR MATA PELAJARAN</h3>
        <p class="panel-subtitle">SMK Negeri 7 Pontianak</p>
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
