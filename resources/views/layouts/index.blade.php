<!DOCTYPE html>
<html lang="en">

<head>

    @include('templates.heads')

</head>

<body>
    <main class="background">

        @include('templates.mainnav')

        <article>
            <span id="home" class="anchor"></span>
            <div class="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 selector">
                            <div id="icons-3" class="icons" data-aos="fade-right" data-aos-offset="0" data-aos-duration="1000">
                                <div class="icons-img">
                                    <img src="{{asset('assets/images/ico/conn_3.png')}}">
                                </div>
                                <div class="icons-text">
                                    <span class="title">Koneksi Stabil</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12 selector">
                            <div id="icons-6" class="icons" data-aos="fade-left" data-aos-offset="0" data-aos-duration="1000">
                                <div class="icons-img">
                                    <img src="{{asset('assets/images/ico/speed_6.png')}}">
                                </div>
                                <div class="icons-text">
                                    <span class="title">Jaminan Bandwidth</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 selector">
                            <div id="icons-5" class="icons" data-aos="fade-right" data-aos-offset="0" data-aos-duration="1000">
                                <div class="icons-img">
                                    <img src="{{asset('assets/images/ico/call_5.png')}}">
                                </div>
                                <div class="icons-text">
                                    <span class="title">Jaringan Ditangani dan Dikontrol 24/7</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12 selector">
                            <div id="icons-1" class="icons" data-aos="fade-left" data-aos-offset="0" data-aos-duration="1000">
                                <div class="icons-img">
                                    <img src="{{asset('assets/images/ico/backup_1.png')}}">
                                </div>
                                <div class="icons-text">
                                    <span class="title">Backup Power Plant Ready</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 selector">
                            <div id="icons-2" class="icons" data-aos="fade-right" data-aos-offset="0" data-aos-duration="1000">
                                <div class="icons-img">
                                    <img src="{{asset('assets/images/ico/service_2.png')}}">
                                </div>
                                <div class="icons-text">
                                    <span class="title">Service Level Agreement 99%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 selector">
                            <div id="icons-4" class="icons" data-aos="fade-left" data-aos-offset="0" data-aos-duration="1000">
                                <div class="icons-img">
                                    <img src="{{asset('assets/images/ico/upgrade_4.png')}}">
                                </div>
                                <div class="icons-text">
                                    <span class="title">Upgradable</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span id="about" class="anchor"></span>
            <div class="about">
                <div class="container">
                    <p class="big-title-w" data-aos="fade-up">
                        ABOUT US
                    </p>
                    <div class="row">
                        <div class="col-12" data-aos="fade-up">
                            <p class="title">
                                <i class="fa fa-users mr-2"></i>
                                <span class="about-title">Tentang Kami</span>
                                <span class="about-title-next">Who Are We</span>
                            </p>
                            <p>
                                SGDc adalah Trademark yang terdaftar atas nama PT. Anugrah Karunia Perkasa Abadi.
                                PT. Anugrah Karunia Perkasa Abadi berdiri pada tahun 2011, bergerak dalam bidang
                                Penyelenggara Jasa Layanan Internet, dengan izin KEMENKOMINFO Nomor: 798 Tahun 2015.
                                Dengan menggunakan teknologi FTTX yang telah mendapatkan Izin Penyelenggaraan
                                JARTAPLOK
                                PS, dengan nomor 382 Tahun 2017. Kami memiliki tim yang handal dalam bidangnya.
                                Kekuatan
                                kami dalam bidang layanan internet fiber optic, telah terbukti sebagai salah satu
                                layanan terbaik, dengan prosedur yang handal dan profesional.
                            </p>
                        </div>
                        <div class="col-12">
                            <div class="text-divider"></div>
                        </div>
                        <div class="col-md-6 col-sm-12" data-aos="fade-left">
                            <div class="visi">
                                <p class="title">
                                    <i class="fa fa-eye mr-2"></i>
                                    <span class="about-title">Visi</span>
                                    <span class="about-title-next">Our Aspires</span>
                                </p>
                                <p>
                                    Menjadi penyedia layanan Teknologi, Informasi dan Komunikasi dengan pelayanan
                                    terbaik
                                    yang mendukung kemajuan perkembangan pada berbagai segmen pasar di bidang bisnis
                                    industri dan komersil serta penggunaan residensial.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12" data-aos="fade-right">
                            <div class="misi">
                                <p class="title">
                                    <i class="fas fa-bullseye mr-2"></i>
                                    <span class="about-title">Misi</span>
                                    <span class="about-title-next">Our Goals</span>
                                </p>
                                <p>
                                    Memberikan yang terbaik bagi para stakeholder (Pelanggan, Karyawan dan Pemegang
                                    Saham).
                                    Menyediakan layanan jaringan internet dan solusi teknologi, informasi,
                                    komunikasi
                                    yang
                                    berkontribusi positif untuk perkembangan bisnis dan rumahan. Mengimplementasikan
                                    teknologi, informasi, dan komunikasi terbaru yang tepat sasaran dan tepat guna.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span id="product" class="anchor"></span>
            <div class="product">
                <div class="container">
                    <p class="big-title-w" data-aos="fade-left">PRODUCTS</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wrapper-product" data-aos="fade-left">
                            <p class="title">
                                <i class="fa fa-globe mr-2"></i>Internet Access
                            </p>
                            <p>
                                SGDc menghadirkan layanan internet untuk melengkapi kebutuhan anda. Dengan
                                menggunakan teknologi fiber optik yang bisa membawa bandwidth hingga 1 Gbps.
                            </p>
                            <span class="learn-more"><a href="{{url('/products#internet')}}"><i class="fas fa-arrow-alt-circle-left mr-2"></i>Learn
                                    More</a></span>
                        </div>
                        <div class="col-lg-4 col-md-6 wrapper-product" data-aos="fade-left">
                            <p class="title">
                                <i class="fa fa-database mr-2"></i>Colocation
                            </p>
                            <p>
                                Dengan menggunakan layanan ini device anda akan ditempatkan di salah satu rak di
                                data center yang terjaga listrik serta koneksi internetnya. Sehingga device anda
                                dapat diakses kapanpun dan dimanapun.
                            </p>
                            <span class="learn-more"><a href="{{url('/products#colocation')}}"><i class="fas fa-arrow-alt-circle-left mr-2"></i>Learn
                                    More</a></span>
                        </div>
                        <div class="col-lg-4 col-md-6 wrapper-product" data-aos="fade-left">
                            <p class="title">
                                <i class="fa fa-wifi mr-2"></i>Local Loop
                            </p>
                            <p>
                                Teknologi localloop memungkinkan anda menghubungkan satu titik ke titik yang lain
                                tanpa adanya gangguan dari user lain karena jalur yang digunakan berbeda dengan
                                jalur lain (Private Connection).
                            </p>
                            <span class="learn-more"><a href="{{url('/products#localloop')}}"><i class="fas fa-arrow-alt-circle-left mr-2"></i>Learn
                                    More</a></span>
                        </div>
                        <div class="col-lg-4 col-md-6 wrapper-product" data-aos="fade-left">
                            <p class="title">
                                <i class="fas fa-satellite-dish mr-2"></i>VSAT
                            </p>
                            <p>
                                SGDc juga menghadirkan solusi Very Small Aperture Terminal(VSAT) untuk anda. Dengan teknologi VSAT dapat membantu mengembangkan bisnis perusahaan anda dengan konektifitas antar site atau kantor cabang di area-area yang terpencil ataupun diperkotaan. VSAT kami dapat di instalasi diseluruh wilayah Indonesia.
                            </p>
                            <span class="learn-more"><a href="{{url('/products#vsat')}}"><i class="fas fa-arrow-alt-circle-left mr-2"></i>Learn
                                    More</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <span id="map" class="anchor"></span>
            <div class="map">
                <div class="container" data-aos="fade-right">
                    <p class="big-title-b">
                        COVERAGE FIBER OPTIC AREA
                    </p>
                    <div class="row">
                        <div class="col-lg-8 wrapper-product">
                            <div class="map-responsive"><iframe src="https://www.google.com/maps/d/u/1/embed?mid=1w1LvQADRrKLnnsFmcODrTvA6MGOdyxXd" width="640" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div class="col-lg-4 wrapper-product">
                            <div class="map-loc">
                                <div class="map-button">
                                    <a class="map-title"><span><i class="fas fa-angle-double-right"></i></span>Jakarta
                                        Utara</a>
                                </div>
                                <div class="map-detail">
                                    <ul>
                                        <li>Kelapa Gading</li>
                                        <li>Pluit</li>
                                        <li>Mangga Dua</li>
                                        <li>Sunter</li>
                                    </ul>
                                </div>
                                <div class="map-button">
                                    <a class="map-title"><span><i class="fas fa-angle-double-right"></i></span>Jakarta
                                        Pusat</a>
                                </div>
                                <div class="map-detail">
                                    <ul>
                                        <li>Sawah Besar</li>
                                        <li>Mangga Besar</li>
                                        <li>Tamansari</li>
                                        <li>Petojo Selatan</li>
                                        <li>Duri Pulo</li>
                                        <li>Kebon Sirih</li>
                                        <li>Gunung Sahari</li>
                                        <li>Pengangsaan, Menteng</li>
                                    </ul>
                                </div>
                                <div class="map-button">
                                    <a class="map-title"><span><i class="fas fa-angle-double-right"></i></span>Jakarta
                                        Barat</a>
                                </div>
                                <div class="map-detail">
                                    <ul>
                                        <li>Roa Malaka</li>
                                        <li>Pinangsia</li>
                                        <li>Tomang</li>
                                    </ul>
                                </div>
                                <div class="map-button">
                                    <a class="map-title"><span><i class="fas fa-angle-double-right"></i></span>Jakarta
                                        Timur</a>
                                </div>
                                <div class="map-detail">
                                    <ul>
                                        <li>-</li>
                                    </ul>
                                </div>
                                <div class="map-button">
                                    <a class="map-title"><span><i class="fas fa-angle-double-right"></i></span>Jakarta
                                        Selatan</a>
                                </div>
                                <div class="map-detail">
                                    <ul>
                                        <li>Kalibata</li>
                                        <li>Menteng Dalam</li>
                                        <li>Pulo, Kebayoran Baru</li>
                                        <li>Tegal Parang</li>
                                        <li>Duren Tiga</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span id="client" class="anchor"></span>
            <div class="client">
                <div class="container" data-aos="fade-up">
                    <p class="big-title-b">
                        CLIENTS & PARTNERS
                    </p>
                    <p class="title">
                        Client Kami
                    </p>
                    <div class="slider">
                        <div id="slide-client">
                            <div class="slide-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c1.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c3.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c6.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c7.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c9.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c11.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/perikanan.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/whiz.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/golden.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/astekindo.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/jamkrindo.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/jamkrindosy.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c1.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c3.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c6.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c7.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="title">
                        Partner Kami
                    </p>
                    <div class="slider">
                        <div id="slide-partner">
                            <div class="slide-item">

                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p1.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p2.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p3.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p4.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">

                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p5.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p6.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p7.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p8.jpg')}}">
                                    </div>
                                </div>

                            </div>
                            <div class="slide-item">

                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c2.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c4.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c5.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c10.jpg')}}">
                                    </div>
                                </div>

                            </div>
                            <div class="slide-item">

                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/c8.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/romantis.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item">

                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p1.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p2.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p3.jpg')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <img class="img-fluid" src="{{asset('assets/images/partner/p4.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            @include('templates.footer')

        </article>
    </main>
</body>

@include('templates.scripts')

</html>

{{-- RUBI CHANDRAPUTRA, SEBAGAI  PROJEK MAGANG PT.AKPA @2019 --}}
{{-- email: rubichandrap@gmail.com --}}