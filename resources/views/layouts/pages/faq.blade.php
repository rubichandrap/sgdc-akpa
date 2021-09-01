<!DOCTYPE html>

<html>

<head>

    <style>
        .footer {
            margin-top: 5rem;
        }
    </style>

    @include('templates.heads')

</head>

<body>
    <main class="background text-white">

        @include('templates.regnav')

        <header class="navbar-neglect" style="margin-bottom: 2rem;">
        </header>
        <div class="container">
            <div class="signup-content">
                <div class="text-center">
                    <p class="big-title-w form-title">FAQ</p>
                    <p>
                        Pelanggan SGDc yang terhormat, jika internet anda mengalami gangguan, anda bisa melakukan
                        beberapa langkah dibawah ini sebelum melakukan panggilan ke tim helpdesk kami. Langkah-langkah
                        dibawah ini dibuat agar mempercepat menyelesaikan masalah koneksi internet. Klik gambar dibawah
                        ini untuk memperbesar atau klik download untuk mengunduh file.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 my-4">
                        <img class="img-fluid pointer img-pop" src="{{asset('assets/images/faq/1zte-indikator.jpg')}}" />
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 my-4">
                        <img class="img-fluid pointer img-pop" src="{{asset('assets/images/faq/2zte-port.jpg')}}" />
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 my-4">
                        <img class="img-fluid pointer img-pop" src="{{asset('assets/images/faq/3zte-basic.jpg')}}" />
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 my-4">
                        <img class="img-fluid pointer img-pop" src="{{asset('assets/images/faq/4zte-addtional.jpg')}}" />
                    </div>
                </div>
                <div class="form-group-reg">
                    <a href="{{asset('assets/images/faq/Faq-doc.pdf')}}" download="FAQ SGDC">
                        <input class="download-button" type="button" name="download" value="Download" />
                    </a>
                </div>
            </div>
            <div id="faq" class="faq-modal">
                <div class="modal-icon">
                    <span>Close!</span>
                </div>
                <div id="faq-content" class="faq-modal-content">
                    <div class="form-wrapper">
                        <img class="img-fluid" src="{{asset('assets/images/faq/1zte-indikator.jpg')}}">
                    </div>
                    <div class="form-wrapper">
                        <img class="img-fluid" src="{{asset('assets/images/faq/2zte-port.jpg')}}">
                    </div>
                    <div class="form-wrapper">
                        <img class="img-fluid" src="{{asset('assets/images/faq/3zte-basic.jpg')}}">
                    </div>
                    <div class="form-wrapper">
                        <img class="img-fluid" src="{{asset('assets/images/faq/4zte-addtional.jpg')}}">
                    </div>
                    <a class="modal-back-button"><i class="fas fa-arrow-alt-circle-left"></i></a>
                    <a class="modal-next-button"><i class="fas fa-arrow-alt-circle-right"></i></a>
                </div>
                <div class="row text-center my-4 ml-0 mr-0">
                        <div class="col-3 faq-control">
                            <span>Indicator</span>
                        </div>
                        <div class="col-3 faq-control">
                            <span>Port</span>
                        </div>
                        <div class="col-3 faq-control">
                            <span>Basic</span>
                        </div>
                        <div class="col-3 faq-control">
                            <span>Additional</span>
                        </div>
                    </div>
            </div>
        </div>

        @include('templates.footer')

    </main>
</body>

@include('templates.scripts')


</html>