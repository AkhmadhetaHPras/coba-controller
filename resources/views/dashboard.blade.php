@extends('layout.app')

@section('content')
<div class="dashboard container-fluid">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header">Jumlah Mahasiswa</div>
                <div class="card-body">{{ $nmhs }}</div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header">Tahun</div>
                <div class="card-body">{{ $tahun }}</div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header">Bulan</div>
                <div class="card-body">{{ $bulan }}</div>
            </div>
        </div>
    </div>
</div>
@endsection