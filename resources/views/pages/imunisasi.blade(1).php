@extends('layout.app')

@section('title','Imunisasi')

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
                        <h1>IMUNISASI ANAK</h1>
                        <p class="">
                            <a style="text-decoration: none; font-weight: light; color: #ff69b4;" href="#">Imunisasi balita dimulai dari umur 0 - 5 tahun</a>
                        </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/bayiimunisasi.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/bayiimunisasi.jpg" width="200">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="images/header.jpg">
                                    <img src="frontend/images/header.jpg" class="xzoom-gallery" width="120" xpreview="frontend/images/header.jpg">
                                </a>
                                <a href="frontend/images/bayiimunisasi.jpg">
                                    <img src="frontend/images/bayiimunisasi.jpg" class="xzoom-gallery" width="120" xpreview="frontend/images/bayiimunisasi.jpg">
                                </a>
                                <a href="frontend/images/bayiimunisasi.jpg">
                                    <img src="frontend/images/bayiimunisasi.jpg" class="xzoom-gallery" width="120" xpreview="frontend/images/bayiimunisasi.jpg">
                                </a>
                            </div>

                        </div>
                        <br>
                        <h2>
                            Dimulai dari 0-5 tahun
                        </h2>
                        <p class="text-isi">
                            Pada bulan Juli tahun 2020, WHO dan UNICEF menyatakan bahwa
                            terjadi penurunan terkait imunisasi, karena pembatasan mobilitas
                            dan terganggunya layanan kesehatan selama covid. Pentingnya imunisasi
                            secara rutin adalah untuk memastikan terpenuhinya hak - hak anak untuk
                            tumbuh sehat dan pencegahan penyakit yang bisa dicegah dengan imunisasi.
                            <br><br>
                            Adapun 7 resiko yang dapat dialami anak, keluarga, dan lingkungannya apabila
                            kebutuhan imunisasi tidak terpenuhi tepat waktu, yaitu:
                            <br><br>
                            <b> 1. Anak lebih rentan mengalami sakit berat <br></b>

                            Menerima imunisasi lengkap dan tepat waktu dapat mencegah penyakit
                            seperti hepatitis, TBC, campak, difteri dll. <br><br>

                            <b> 2. Kemungkinan penularan sakit menjadi lebih tinggi <br></b>

                            Setiap kali seseorang sakit, maka anak, atau cucu dan orang tua,
                            juga berisiko terkena. Orang dewasa merupakan sumber infeksi utama
                            pertusis (batuk rejan) pada balita, penyakit ini bahkan dapat menyebabkan
                            kematian pada bayi. Imunisasi bukan hanya melindungi anak, tetapi
                            juga melindungi orang tua dan anggota keluarga lain serta orang-orang
                            di lingkungan sekitar. <br><br>

                            <b> 3. Terjadinya komplikasi <br></b>

                            Suatu penyakit tidak hanya berdampak langsung terhadap
                            penderita dan keluarganya, tetapi juga terhadap masyarakat
                            secara keseluruhan. Kejadian sakit dan komplikasi penyakit
                            dapat membutuhkan biaya tinggi dan perawatan yang memakan waktu. <br><br>

                            <b> 4. Penurunan Kualitas Hidup <br></b>

                            Penyakit-penyakit yang dapat dicegah dengan imunisasi memiliki
                            risiko komplikasi yang mengakibatkan disabilitas tetap. Contohnya,
                            campak yang dapat menyebabkan kebutaan. Ada pula kelumpuhan sebagai
                            gejala terberat yang dikaitkan dengan polio karena dapat menimbulkan
                            disabilitas permanen dan kematian. <br><br>

                            <b> 5. Resiko Penurunan Harapan Hidup <br></b>

                            Vaksinasi/Imunisasi yang tidak lengkap mempunyai resiko penurunan angka
                            kehidupan. Menurut penelitian, resiko penurunan meninggalnya balita mulai
                            berkurang di tahun 2000. Hal tersebut disebabkan karena adanya keuntungan
                            dari vaksinasi penyakit tertentu.
                            <br>
                            <hr>
                            <b>Sumber : <br></b>
                            <b><a style=" color: #354354" href="https://www.unicef.org/indonesia/stories/7-consequences-and-risks-not-getting-your-child-routinely-vaccinated">
                                    [1]&emsp;7 konsekuensi dan risiko jika anak tidak mendapatkan imunisasi rutin
                                </a></b>
                            <b><a style="color: #354354" href="https://www.unicef.org/indonesia/media/6166/file/
                Imunisasi%20Rutin%20pada%20Anak%20Selama%20Pandemi%20COVID-19%
                20di%20Indonesia:%20Persepsi%20Orang%20tua%20dan%20Pengasuh.pdf">
                                    [2]&emsp;Imunisasi Rutin pada Anak Selama Pandemi COVID-19 di Indonesia: <br>
                                    &emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Persepsi Orang tua dan Pengasuh
                                </a></b>
                            <b><a style="color: #354354" href="https://stikes-bhaktipertiwi.e-journal.id/Kesehatan/article/view/67/52">
                                    [2]&emsp;HUBUNGAN DUKUNGAN KELUARGA, EKONOMI DAN KETERSEDIAAN VAKSIN
                                    &emsp;&emsp;&nbsp;TERHADAP KELENGKAPAN IMUNISASI DASAR BAYI USIA 9 BULAN PADA <br>
                                    &emsp;&emsp;&nbsp;MASA PANDEMI COVID 19 DI PERAKTEK MANDIRI BIDANGHISLIN DEPOK <br>
                                </a></b>
                        </p>


                        <div class="features row">
                            <div class="col-md-4">
                                <span class="fa-solid fa-baby fa-2x"></span>
                                <div class="description">
                                    <h3>Imunisasi</h3>
                                    <p>Umur 0-5 tahun</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <i class="fa-solid fa-chart-line fa-2x"></i>
                                    <h3>KMS Online</h3>
                                    <p>Umur 0-5 tahun</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <span class="fa-solid fa-school fa-2x"></span>
                                    <div class="description">
                                        <h3>PAUD</h3>
                                        <p>Umur 0-5 tahun</p>
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
                                <th width="70%"><a href="#" class="Imunisasi-text">Cari tahu lebih lanjut terkait imunisasi</a></th>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="#" class="btn btn-block btn-join-now mt-3 py-2">Pendaftaran Imunisasi</a>
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