<!DOCTYPE html>

<html>

<head>

    @include('templates.heads')

</head>

<body>
   
    @include('templates.subnav')

    <header class="navbar-neglect">
        <div class="jumbotron jumbotron-fluid bg-dark position-relative text-white">
            <div class="bg-header-products">
                <img src="{{asset('assets/images/internet_access.jpg')}}">
            </div>
            <div class="header-title">
                <h1>PRODUCTS</h1>
            </div>
    </header>
    <article>
        <div class="container">
            <div id="internet" name="internet" style="padding: 6rem 0;">
                <div class="content-product">
                    <p class="big-title-b">
                        <i class="fa fa-globe mr-2"></i>INTERNET ACCESS
                    </p>
                    <div class="row">
                        <div class="col-lg-6 wrapper-product text-product">
                            <p class="lead font-weight-bold">
                                SOHO
                            </p>
                            <p class="text-justify">
                                Paket koneksi Small Office Head Office(SOHO) memiliki kelebihan 
                                pada sisi ekonomisnya dan kecepatan transer data yang cepat. 
                                Dengan menggunakan paket koneksi SOHO anda bisa mendapatkan 
                                1 Static IP Public dengan gratis tanpa ada biaya tambahan. 
                                Ada beberapa pilihan bandwidth yang bisa anda pilih, 
                                yaitu 20Mbps, 50Mbps, 100Mbps dan 200Mbps.
                            </p>
                        </div>
                        <div class="col-lg-6 wrapper-product img-product">
                            <img class="img-fluid" src="{{asset('assets/images/internet_soho.jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="content-product">
                    <div class="row">
                        <div class="col-lg-6 wrapper-product text-product" style="text-align: justify;">
                            <p class="lead text-right font-weight-bold">
                                DEDICATED
                            </p>
                            <p class="text-justify">
                                Dengan bandwidth yang tidak dibagi dengan user lain, paket koneksi dedicated
                                menjamin bandwidth anda akan tetap terjaga selama 24x7 tanpa adanya pengurangan
                                bandwidth / share bandwidth. Paket Dedicated sangat cocok untuk anda yang sangat
                                membutuhkan kestabilan koneksi secara penuh. Dengan berlangganan paket koneksi
                                Dedicated anda akan mendapatkan Static IP Public secara gratis. Pada paket koneksi
                                Dedicated, bandwidth yang digunakan dapat disesuaikan (Customable Bandwidth) sesuai
                                dengan kebutuhan anda.
                            </p>
                        </div>
                        <div class="col-lg-6 wrapper-product img-product">
                            <img class="img-fluid" src="{{asset('assets/images/internet_dedicated.jpg')}}">
                        </div>

                    </div>
                </div>
            </div>
            <img class="img-separator" src="{{asset('assets/images/separate.png')}}">
            <div id="colocation" name="colocation" style="padding: 6rem 0;">
                <div class="content-product">
                    <p class="big-title-b">
                        <i class="fa fa-database mr-2"></i>COLOCATION
                    </p>
                    <div class="row">
                        <div class="col-lg-6 wrapper-product text-product">
                            <p class="text-justify">
                                Dengan menggunakan layanan Colocation dari SGDc perangkat 
                                anda akan ditempatkan Data Center level Tier 3 yang memiliki 
                                standard tinggi yang terjaga listrik dan koneksi internetnya. 
                                Sehingga device anda dapat diakses kapanpun dan dimanapun 
                                dari seluruh dunia tanpa adanya hambatan apapun.
                            </p>
                        </div>
                        <div class="col-lg-6 wrapper-product img-product">
                            <img class="img-fluid" src="{{asset('assets/images/colocation.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <img class="img-separator" src="{{asset('assets/images/separate.png')}}">
            <div id="localloop" name="localloop" style="padding: 6rem 0;">
                <div class="content-product">
                    <p class="big-title-b">
                        <i class="fa fa-wifi mr-2"></i>LOCAL LOOP
                    </p>
                    <div class="row">
                        <div class="col-lg-6 wrapper-product text-product">
                            <p class="text-justify">
                                SGDc juga menghadirkan sebuah solusi bernama Local Loop dengan 
                                menggunakan teknologi FTTX end to end. Dengan menggunakan 
                                layanan ini anda dapat menghubungkan kantor pusat dan beberapa 
                                kantor cabang secara lokal menggunakan jalur khusus 
                                Fiber Optik kami.
                            </p>
                        </div>
                        <div class="col-lg-6 wrapper-product img-product">
                            <img class="img-fluid" src="{{asset('assets/images/localloop.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <img class="img-separator" src="{{asset('assets/images/separate.png')}}">
            <div id="vsat" name="vsat" style="padding: 6rem 0;">
                <div class="content-product">
                    <p class="big-title-b">
                        <i class="fas fa-satellite-dish mr-2"></i>VSAT
                    </p>
                    <div class="row">
                        <div class="col-lg-6 wrapper-product text-product">
                            <p class="text-justify">
                                SGDc juga menghadirkan solusi Very Small Aperture Terminal(VSAT) 
                                untuk anda. Dengan teknologi VSAT dapat membantu mengembangkan 
                                bisnis perusahaan anda dengan konektifitas antar site atau kantor 
                                cabang di area-area yang terpencil ataupun diperkotaan. 
                                VSAT kami dapat di instalasi diseluruh wilayah Indonesia.
                            </p>
                        </div>
                        <div class="col-lg-6 wrapper-product img-product">
                            <img class="img-fluid" src="{{asset('assets/images/localloop.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @include('templates.footer')
    </article>
</body>

@include('templates.scripts')

</html>