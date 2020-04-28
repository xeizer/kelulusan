@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('mapel.index')}}" class="btn btn-primary">Mapel</a>
                    <a href="{{route('siswa.index')}}" class="btn btn-primary">Siswa</a>
                    <a href="" class="btn btn-primary">Nilai</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
