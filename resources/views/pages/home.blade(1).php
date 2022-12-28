@extends('layout.app')

@section('title','Home')


@section('content')
<!--header-->
<header class="text-center">

    <h1 class="mt-5">POSYANDU SAHABAT MASYARAKAT</h1>
    <p class="mt-2">MELAYANI MASYARAKAT DENGAN SEPENUH HATI</p>
    <a href="#" class="btn btn-get-daftar px-4 mt-4">
        PENDAFTARAN POSYANDU
    </a>
</header>

<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="text-center stats-detail">
                <h2>SELAMAT DATANG</h2>
                <p>DI POSYANDU KASWARI</p>
            </div>
        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>PEMERIKSAAN KESEHATAN DI POSYANDU</h2>
                    <p>Pelayanan posyandu bagi masyarakat</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-posyandu row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="things-posyandu text-center d-flex flex-column" style="background-image: url(frontend/images/imunisasi.jpg);">

                        <div class="posyandu-activity">IMUNISASI
                            <br>
                            ANAK
                        </div>
                        <br>
                        <div class="activity-button mt-auto">
                            <a href="{{ url('/detailimun') }}" class="btn btn-activity-details px-4">
                                Info Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="things-posyandu text-center d-flex flex-column" style="background-image: url(frontend/images/imunisasi.jpg);">

                        <div class="posyandu-activity">IMUNISASI
                            <br>
                            ANAK
                        </div>
                        <br>
                        <div class="activity-button mt-auto">
                            <a href="{{ url('/detailimun') }}" class="btn btn-activity-details px-4">
                                Info Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="things-posyandu text-center d-flex flex-column" style="background-image: url(frontend/images/imunisasi.jpg);">

                        <div class="posyandu-activity">IMUNISASI
                            <br>
                            ANAK
                        </div>
                        <br>
                        <div class="activity-button mt-auto">
                            <a href="{{ url('/detailimun') }}" class="btn btn-activity-details px-4">
                                Info Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="things-posyandu text-center d-flex flex-column" style="background-image: url(frontend/images/imunisasi.jpg);">

                        <div class="posyandu-activity">IMUNISASI
                            <br>
                            ANAK
                        </div>
                        <br>
                        <div class="activity-button mt-auto">
                            <a href="{{ url('/detailimun') }}" class="btn btn-activity-details px-4">
                                Info Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-profile-heading" id="profileHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>People Behind Posyandu Kaswari</h2>
                    <p>People people pleaser</p>
                </div>
            </div>
        </div>
    </section>

    <div class="section section-profile-content" id="profileContent">
        <div class="container">
            <div class="section-profile-posyandu row 
justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="things things-profile text-center">
                        <div class="profile-content">
                            <img src="frontend/images/bayi.jpg" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">LILIS SETIAWATI</h3>
                            <p class="profile">Bendahara Posyandu Kaswari 2</p>
                        </div>
                        <hr>
                        <p class="profile-staff mt-2">
                            2007 - Sekarang
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="things things-profile text-center">
                        <div class="profile-content">
                            <img src="frontend/images/bayi.jpg" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">LILIS SETIAWATI</h3>
                            <p class="profile">Bendahara Posyandu Kaswari 2</p>
                        </div>
                        <hr>
                        <p class="profile-staff mt-2">
                            2007 - Sekarang
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-more-known 
        px-4 mt-4 mx-1">
                        Need More To Know >>>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection