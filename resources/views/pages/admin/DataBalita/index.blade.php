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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- $items berasal dari controller -->
                        @forelse ($items as $d)
                        <tr>
                            <td>{{ $d->id}}</td>
                            <td>{{ $d->nama_anak}}</td>
                            <td>{{ $d->nama_ayah}}</td>
                            <td>{{ $d->nama_ibu}}</td>
                            <td>{{ $d->jenis_kelamin}}</td>
                            <td>{{ $d->tanggal_lahir}}</td>
                            <td>{{ $d->tinggi_badan}}</td>
                            <td>{{ $d->berat_badan}}</td>
                            <td>
                                <a href="{{ route('databalita.edit', $d->id)}}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('databalita.destroy', $d->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection