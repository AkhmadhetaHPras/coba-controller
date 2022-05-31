@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="row d-flex justify-content-beetwen">
            <div class="col-5">
                <div class="mb-3">
                    <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-error">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-striped">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{ $mhs['nim'] }}</td>
        <td>{{ $mhs['nama'] }}</td>
        <td>{{ $mhs['jenis_kelamin'] }}</td>
        <td>{{ $mhs['jurusan'] }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy',$mhs['nim']) }}" method="POST">
                <a href="{{ route('mahasiswa.edit', $mhs['nim']) }}" class="mx-1"><i class="las la-edit"></i></a>
                <a href="{{ route('mahasiswa.show', $mhs['nim']) }}" class="mx-1 text-success"><i class="las la-eye"></i></a>
                @csrf
                @method('DELETE')
                <button type="submit" style="border: none; background-color: transparent;"><i class='las la-trash-alt'></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection