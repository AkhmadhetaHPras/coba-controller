@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nim: </b>{{$mahasiswa['nim']}}</li>
                        <li class="list-group-item"><b>Nama: </b>{{$mahasiswa['nama']}}</li>
                        <li class="list-group-item"><b>Jenis Kelamin: </b>{{$mahasiswa['jenis_kelamin']}}</li>
                        <li class="list-group-item"><b>Jurusan: </b>{{$mahasiswa['jurusan']}}</li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection