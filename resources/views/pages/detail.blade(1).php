@extends('layout.app')

@section('title','Detail Posyandu')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        About
                    </li>
                    <li class="breadcrumb-item active">
                        Details
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Posyandu Kaswari</h1>
                        <p>
                            Desa Wanajaya, Kec. Cibitung Kab. Bekasi
                        </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/header.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/header.jpg" width="650">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/header.jpg">
                                    <img src="frontend/images/header.jpg" class="xzoom-gallery" width="120" xpreview="frontend/images/header.jpg">
                                </a>
                                <a href="frontend/images/header2.jpg">
                                    <img src="frontend/images/header2.jpg" class="xzoom-gallery" width="120" xpreview="frontend/images/header2.jpg">
                                </a>
                                <a href="frontend/images/header4.jpg">
                                    <img src="frontend/images/header4.jpg" class="xzoom-gallery" width="120" xpreview="frontend/images/header4.jpg">
                                </a>
                            </div>

                        </div>

                        <h2>
                            Tentang Posyandu
                        </h2>
                        <p>
                            Posyandu Kaswari dibangun pada tahun 2002
                        </p>
                        <p>
                            Awalnya hanya memiliki 15 kader
                        </p>

                        <div class="features row">
                            <div class="col-md-4">
                                <span class="fa-solid fa-baby fa-2x"></span>
                                <div class="description">
                                    <h3>Imunisasi</h3>
                                    <p>0-5 tahun</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <i class="fa-solid fa-chart-line fa-2x"></i>
                                    <h3>Data Balita</h3>
                                    <p>0-5 tahun</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <span class="fa-solid fa-person-pregnant fa-2x"></span>
                                    <div class="description">
                                        <h3>Data Ibu Hamil</h3>
                                        <p>0 - 9 bulan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2 class="text-center font-weight-bold">Halaman Terkait</h2>
                        <div class="members my-2">

                        </div>
                        <hr>
                        <table class="artikel-informasi">
                            <tr>
                                <th width="70%"><a href="https://youtu.be/1hZa60t8wSE" class="Imunisasi-text">Cari tahu lebih lanjut terkait imunisasi</a></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush