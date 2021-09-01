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
                    <p class="big-title-w form-title">REGISTER</p>
                    <div class="parameter">
                        <ul class="progressbar-cstm">
                            <li class="completed">
                                <p>Step 1</p>
                                <p>Choose Package</p>
                            </li>
                            <li class="completed">
                                <p>Step 2</p>
                                <p>Fill The Form</p>
                            </li>
                            <li class="completed">
                                <p>Step 3</p>
                                <p>Review</p>
                            </li>
                        </ul>
                    </div>
                    <p>
                        Terima kasih telah mendaftar!
                    </p> 
                    <p>
                        Kami akan memproses permintaan registrasi anda. Admin akan segera
                        menghubungi anda melalui Email atau Nomor Telpon yang anda daftarkan untuk tahap selanjutnya.
                    </p>
                    <p>
                        <a class="back-home" href="{{route('index')}}">Kembali ke Home</a>
                    </p>
                </div>
            </div>
        </div>

        @include('templates.footer')

    </main>
</body>

@include('templates.scripts')


</html>