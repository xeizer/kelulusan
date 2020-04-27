@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <form action="{{route('siswa.import')}}" class="form-inline" method="post" enctype="multipart/form-data">
                        @csrf
                        <a href="{{route('home')}}" class="btn btn-secondary col-3">Kembali ke Home</a>
                        <input type="file" name="file" class="form-control-filr col-6" />
                        <input type="submit" class="btn btn-primary btn-block col-3" value="Import" />
                    </form>
                    <p>
                    <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                <th>nis</th>
                                <th>pstudi</th>
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
                                <td>{{ $d->nis }}</td>
                                <td>{{ $d->pstudi }}</td>
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
@push('script')
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
@endpush
@endsection
