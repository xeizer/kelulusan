@extends('layouts.master')

@section('content')
<div class="panel panel-headline">
    <div class="panel-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">

                        <form action="{{route('siswa.import')}}" class="form-inline" method="post" enctype="multipart/form-data">
                            @csrf
                            <a href="{{route('home')}}" class="btn btn-secondary">Kembali ke Home</a>
                            <input type="file" name="file" class="form-control-file" />
                            <input type="submit" class="btn btn-primary" value="Import" />
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
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>nama</th>
                                    <th>nis</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>jurusan</th>
                                    <th>kelas</th>
                                    <th>wali</th>
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
                                    <td>{{ $d->wali }}</td>
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
