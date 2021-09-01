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
        <div class="loader fa-3x">
            <i class="fas fa-circle-notch fa-spin"></i>
        </div>
        <div class="container">
            <div class="signup-content">
                <div class="text-center">
                    <p class="big-title-w form-title">REGISTER</p>
                </div>
                <div class="parameter">
                    <ul class="progressbar-cstm">
                        <li class="bar-p active">
                            <p>Step 1</p>
                            <p>Choose Package</p>
                        </li>
                        <li class="bar-p">
                            <p>Step 2</p>
                            <p>Fill The Form</p>
                        </li>
                        <li class="bar-p">
                            <p>Step 3</p>
                            <p>Review</p>
                        </li>
                    </ul>
                </div>
                <div class="signup-form">
                    <form class="register-form" method="POST" action="{{route('saveRegister')}}">
                        @csrf
                        <div id="review" class="form-wrapper text-center">
                            <div class="form-group-reg">
                                <p>Paket Dipilih : <span id="package-rev">{{$data['package_plan']}}</span></p>
                                <input type="hidden" name="package_plan" value="{{$data['package_plan']}}">
                                
                                <p>Nama : <span id="name-rev">{{$data['name']}}</span></p>
                                <input type="hidden" name="name" value="{{$data['name']}}">

                                <p>Jenis Kelamin : <span id="gender-rev">{{$data['gender']}}</span></p>
                                <input type="hidden" name="gender" value="{{$data['gender']}}">

                                <p>Tempat Lahir : <span id="birth_place-rev">{{$data['birth_place']}}</span></p>
                                <input type="hidden" name="birth_place" value="{{$data['birth_place']}}">

                                <p>Tanggal Lahir : <span id="birth_date-rev">{{$data['birth_date']}}</span></p>
                                <input type="hidden" name="birth_date" value="{{$data['birth_date']}}">

                                <p>Email : <span id="email-rev">{{$data['email']}}</span></p>
                                <input type="hidden" name="email" value="{{$data['email']}}">

                                <p>Nomor Telepon : <span id="phone_number-rev">{{$data['phone_number']}}</span></p>
                                <input type="hidden" name="phone_number" value="{{$data['phone_number']}}">

                                <p>Provinsi : <span id="address_province-rev">{{$data['address_province']}}</span></p>
                                <input type="hidden" name="address_province" value="{{$data['address_province']}}">

                                <p>Kotamadya/Kabupaten : <span id="address_regency-rev">{{$data['address_regency']}}</span></p>
                                <input type="hidden" name="address_regency" value="{{$data['address_regency']}}">

                                <p>Kecamatan : <span id="address_district-rev">{{$data['address_district']}}</span></p>
                                <input type="hidden" name="address_district" value="{{$data['address_district']}}">

                                <p>Alamat Lengkap : <span id="specify_address-rev">{{$data['specify_address']}}</span></p>
                                <input type="hidden" name="specify_address" value="{{$data['specify_address']}}">                      
                            </div>
                            <div class="form-group-reg">
                                <a href="{{url()->previous()}}"><input class="form-back-button" type="button" value="Back" /></a>
                                <input id="submit" class="regsubmit form-submit" type="submit" name="submit" value="Submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('templates.footer')

    </main>
</body>

@include('templates.scripts')
@include('templates.addressajax')

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
</script>

<script>
    function getData() {
        var packageVal = $('input[name=package_plan]:checked').val(),
            nameVal = $('#name').val(),
            genderVal = $('input[name=gender]:checked').val(),
            birthPlaceVal = $('#birth_place').find('option:selected').text(),
            birthDateVal = $('#birth_date').val(),
            emailVal = $('#email').val(),
            phoneNumberVal = $('#phone_number').val(),
            addressProvinceVal = $('#provinces').find('option:selected').text(),
            addressRegencyVal = $('#regencies').find('option:selected').text(),
            addressDistrictVal = $('#districts').find('option:selected').text(),
            specifyAddressVal = $('#specify_address').val(),

            packageRev = $('#package-rev'),
            nameRev = $('#name-rev'),
            genderRev = $('#gender-rev'),
            birthPlaceRev = $('#birth_place-rev'),
            birthDateRev = $('#birth_date-rev'),
            emailRev = $('#email-rev'),
            phoneNumberRev = $('#phone_number-rev'),
            addressProvinceRev = $('#address_province-rev'),
            addressRegencyRev = $('#address_regency-rev'),
            addressDistrictRev = $('#address_district-rev'),
            specifyAddressRev = $('#specify_address-rev');

        $(packageRev).html(packageVal);
        $(nameRev).html(nameVal);
        $(genderRev).html(genderVal);
        $(birthPlaceRev).html(birthPlaceVal);
        $(birthDateRev).html(birthDateVal);
        $(emailRev).html(emailVal);
        $(phoneNumberRev).html(phoneNumberVal);
        $(addressProvinceRev).html(addressProvinceVal);
        $(addressRegencyRev).html(addressRegencyVal);
        $(addressDistrictRev).html(addressDistrictVal);
        $(specifyAddressRev).html(specifyAddressVal);
    }
</script>

</html>