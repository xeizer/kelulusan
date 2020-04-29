@extends('layouts.master')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div id="toastr-demo" class="panel">
            <div class="panel-body">
                <!-- CONTEXTUAL -->
                <h4>Input Data Siswa</h4>
                    <form action="{{route('siswa.import')}}" class="form-inline" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">   
                            <input type="file" name="file" class="form-control-file" />
                            <span class="input-group-btn"><button class="btn btn-primary btn-toastr" type="submit" value="Import"><i class="fa fa-upload"></i> Import</button></span>
                            <a href="{{route('home')}}" class="btn btn-secondary btn-toastr fa fa-home"> Kembali ke Home</a>
                        </div>
                    </form>
                <!-- END CONTEXTUAL -->
            </div>
        </div>
    </div>
</div>

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
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>nama</th>
                                    <th>nisn</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>jurusan</th>
                                    <th>kelas</th>
                                    <th>keterangan</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td scope="row">{{$loop->iteration}}</td>
                                    <td>{{ $d->user->name }}</td>
                                    <td>{{ $d->nisn }}</td>
                                    <td>{{ $d->tempat_lahir }}</td>
                                    <td>{{ $d->tanggal_lahir }}</td>
                                    <td>{{ $d->jurusan }}</td>
                                    <td>{{ $d->kelas }}</td>
                                    <td>{{ $d->keterangan }}</td>
                                    <td>Data</td>
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
@push('script')
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
@endpush
@endsection
