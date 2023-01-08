@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Balita</h1>

        <a href="{{ route('databalita.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50">
                Tambah Data Balita
            </i>
        </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Anak</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Nama Anak</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection