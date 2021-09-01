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
                    <form class="register-form" method="POST" action="{{route('storeRegister')}}">
                        @csrf
                        <!-- tiap wrapper width 33.33% -->
                        <div id="package" class="form-wrapper" name="package">
                            <div class="button-wrapper">
                                <div class="button-label">
                                    <span class="checklist"></span>
                                    <div class="button-title">
                                        <h2>DEDICATED FULL</h2>
                                    </div>
                                    <hr />
                                    <div class="button-body">
                                        <div class="button-planned">
                                            <ul>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Full 20, </span>
                                                            <span>iix 20mbps ix 2mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Full 20mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Full 30, </span>
                                                            <span>iix 30mbps ix 3mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Full 30mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Full 50, </span>
                                                            <span>iix 50mbps ix 5mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Full 50mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Full 70, </span>
                                                            <span>iix 70mbps ix 7mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Full 70mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Full 100, </span>
                                                            <span>iix 100mbps ix 10mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Full 100mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="form-group-reg">
                                                <input class="choose-package" type="button" value="Choose Package" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-label dm">
                                    <span class="checklist"></span>
                                    <div class="button-title">
                                        <h2>DEDICATED MIX</h2>
                                    </div>
                                    <hr />
                                    <div class="button-body">
                                        <div class="button-planned">
                                            <ul>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Mix 5mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Mix 5mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Mix 10mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Mix 10mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Mix 15mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Mix 15mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Mix 20mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Mix 20mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Mix 30mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Mix 30mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Dedicated Mix 50mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Dedicated Mix 50mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="form-group-reg">
                                                <input class="choose-package" type="button" value="Choose Package" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-label">
                                    <span class="checklist"></span>
                                    <div class="button-title">
                                        <h2>SOHO</h2>
                                    </div>
                                    <hr />
                                    <div class="button-body">
                                        <div class="button-planned">
                                            <ul>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Up to 40mbps, </span>
                                                            <span>40mbps, Upload 10mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="SOHO Up to 40mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Up to 100mbps, </span>
                                                            <span>100mbps, Upload 25mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="SOHO Up to 100mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Up to 200mbps, </span>
                                                            <span>200mbps, Upload 50mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="SOHO Up to 200mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Up to 400mbps, </span>
                                                            <span>Download 400mbps, Upload 100mbps</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="SOHO Up to 400mbps" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="form-group-reg">
                                                <input class="choose-package" type="button" value="Choose Package" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-label colo">
                                    <span class="checklist"></span>
                                    <div class="button-title">
                                        <h2>COLOCATION</h2>
                                    </div>
                                    <hr />
                                    <div class="button-body">
                                        <div class="button-planned">
                                            <ul>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Colo 1u</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Colocation 1u" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Colo 2u</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Colocation 2u" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Colo 4u</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Colocation 4u" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Colo 8u</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Colocation 8u" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                                <li class="dummy-li">
                                                    <label>
                                                        <div class="package-text">
                                                            <span class="font-weight-bold">Colo 42u</span>
                                                        </div>
                                                        <div class="package-radio">
                                                            <input class="radio-item" type="radio" name="package_plan" value="Colocation 42u" />
                                                            <span class="checkmark-square"></span>
                                                        </div>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="form-group-reg">
                                                <input class="choose-package" type="button" value="Choose Package" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="identity" class="form-wrapper" name="identity">
                            <div class="form-group-reg">
                                <label style="margin-top: 7px;" for="name">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </label>
                                <input type="text" class="reg form-control
                                @error('name') is-invalid @enderror" name="name" id="name" {{-- value="{{old('name')}}" --}} autocomplete="on" placeholder="Nama Lengkap" />

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group-reg">
                                <label>
                                    <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                </label>
                                <span class="form-span">Jenis Kelamin</span>
                                <label class="radio-cstm">Laki-Laki
                                    <input type="radio" name="gender" value="Male" {{-- {{(old('gender') == 'Male') ? 'checked' : ''}} --}} checked>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-cstm">Perempuan
                                    <input type="radio" name="gender" value="Female" {{-- {{(old('gender') == 'Female') ? 'checked' : ''}} --}}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-group-reg">
                                <label>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </label>
                                <span class="form-span">Tempat/Tanggal Lahir</span>
                                <select class="form-control select-cstm @error('birth_place') is-invalid @enderror" id="birth_place" name="birth_place" autocomplete="off">
                                    <option value="0" disable="true" selected="true">Pilih Provinsi</option>
                                    @foreach ($provinces as $province => $value)
                                    <option value="{{$province}}" {{-- {{ old('birth_place') == $province ? 'selected' : '' }} --}}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('birth_place')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <input class="reg form-control input-cstm 
                                @error('birth_date') is-invalid @enderror" type="date" {{-- value="{{old('birth_date')}}" --}} name="birth_date" id="birth_date" min='1900-01-01' max='2019-07-31' autocomplete="on" placeholder="mm/dd/yyyy">
                                @error('birth_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group-reg">
                                <label style="margin-top: 7px;" for="email"><i class="fas fa-envelope" aria-hidden="true"></i></label>
                                <input id="email" type="text" {{-- value="{{old('email')}}" --}} class="reg form-control  @error('email') is-invalid @enderror" name="email" autocomplete="on" placeholder="E-mail" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group-reg">
                                <label style="margin-top: 7px;" for="phone_number"><i class="fas fa-phone" aria-hidden="true"></i></label>
                                <input id="phone_number" type="tel" {{-- value="{{old('phone_number')}}" --}} class="reg form-control @error('phone_number') is-invalid @enderror" name="phone_number" minlength="10" maxlength="15" autocomplete="on" placeholder="Nomor Telepon" />
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group-reg">
                                <label for="pass"><i class="fas fa-address-card" aria-hidden="true"></i></label>
                                <span class="form-span">Alamat</span>
                                <select class="form-control select-cstm @error('address_province') is-invalid @enderror" {{--  value="{{old('address_province')}}" --}} name="address_province" id="provinces" autocomplete="off">
                                    <option value="0" disable="true" selected="true">Pilih Provinsi</option>
                                    @foreach ($provinces as $province => $value)
                                    <option value="{{$province}}" {{--  {{ old('address_province') == $province ? 'selected' : '' }} --}}>{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('address_province')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <select class="form-control select-cstm @error('address_regency') is-invalid @enderror" {{-- value="{{old('address_regency')}}" --}} name="address_regency" id="regencies" autocomplete="off">
                                    <option value="0" disable="true" selected="true">Pilih Kotamadya/Kabupaten</option>
                                </select>
                                @error('address_regency')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <select class="form-control select-cstm @error('address_district') is-invalid @enderror" {{--  value="{{old('address_district')}}" --}} name="address_district" id="districts" autocomplete="off">
                                    <option value="0" disable="true" selected="true">Pilih Kecamatan</option>
                                </select>
                                @error('address_district')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                                <textarea class="form-control textarea-cstm @error('specify_address') is-invalid @enderror" maxlength="75" name="specify_address" id="specify_address" value="specify_address" autocomplete="on" placeholder="Alamat Lengkap (Kelurahan, Nama Jalan, RT/RW, etc)">{{-- {{old('specify_address')}} --}}</textarea>
                                @error('specify_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                           <div class="form-group-reg" style="margin-top: 1.5rem; overflow: visible;">
                                <label for="g-recaptcha"><i class="fa fa-check mr-2"></i>Captcha</label>
                                <div id="captcha" class="g-recaptcha {{ $errors->has('g-recaptcha-response') ? 'is-invalid' : '' }}"
                                     name="g-recaptcha" data-sitekey="6LfFu7EUAAAAAI8DQrDYNokmh8rUq1yQmX5sEz2U" 
                                     data-callback="reCaptchaCallback">
                                </div>
                                {{-- {!! NoCaptcha::display() !!}  --}}         
                                {!! NoCaptcha::renderJs() !!}
                                @if($errors->has('g-recaptcha-response'))
                                    <span class="help-block text-danger" style="position: relative; top: 28px; font-size: 80%;">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group-reg">
                            <input class="back-button" type="button" value="Back" />
                            <input id="identity-next" class="next-button" type="button" value="Next" onclick="getData()" />
                        </div>
                </div>
                <div id="review" class="form-wrapper text-center">
                    <div class="form-group-reg">
                        <p>Paket Dipilih : <span id="package-rev"></span></p>
                        <p>Nama : <span id="name-rev"></span></p>
                        <p>Jenis Kelamin : <span id="gender-rev"></span></p>
                        <p>Tempat Lahir : <span id="birth_place-rev"></span></p>
                        <p>Tanggal Lahir : <span id="birth_date-rev"></span></p>
                        <p>Email : <span id="email-rev"></span></p>
                        <p>Nomor Telepon : <span id="phone_number-rev"></span></p>
                        <p>Provinsi : <span id="address_province-rev"></span></p>
                        <p>Kotamadya/Kabupaten : <span id="address_regency-rev"></span></p>
                        <p>Kecamatan : <span id="address_district-rev"></span></p>
                        <p>Alamat Lengkap : <span id="specify_address-rev"></span></p>
                    </div>
                    <div class="form-group-reg">
                        <input class="back-button" type="button" value="Back" />
                        <input id="submit-button" class="regsubmit form-submit" type="submit" name="submit" value="Submit" />
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
    var name = $('#name'),
        birth_place = $('#birth_place'),
        birth_date = $('#birth_date'),
        email = $('#email'),
        phone_number = $('#phone_number'),
        address_province = $('#provinces'),
        address_regency = $('#regencies'),
        address_district = $('#districts'),
        specify_address = $('#specify_address'),
        captcha = $('#g-recaptcha-response');
        
    function reCaptchaCallback() {
        $('form').each(function() {
                if ($(name).val() != "" && $(birth_place).val() != 0 && $(birth_date).val() != ""
                && $(email).val() != "" && $(phone_number).val() != "" && $(address_province).val() != 0
                && $(address_regency).val() != 0 && $(address_district).val() != 0 && $(specify_address).val() != 0
                && $(captcha).val() != "") {
                $('#identity-next').attr('disabled', false);
                return true;
            }
            else {
                $('#identity-next').attr('disabled', true);
                return false;
            }  
        });
    }    
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

<!-- Number Only For Phone Number Field And Alphabeth Only For Name -->

<script>
    var phone_input = document.getElementById('phone_number');
    var name_input = document.getElementById('name');

    function validDigits(n) {
        return n.replace(/[^0-9]+/g, '');
    }

    function validLetters(n) {
        return n.replace(/[^a-zA-Z ]/g, '')
    }

    phone_input.addEventListener('keyup', function() {
        var field = phone_input.value;
        phone_input.value = validDigits(field);
    });

    name_input.addEventListener('keyup', function() {
        var field = name_input.value;
        name_input.value = validLetters(field);
    });
</script>

<!-- Fixed Min-Max Date -->

<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("birth_date").setAttribute("max", today);
</script>

</html>

{{-- RUBI CHANDRAPUTRA, SEBAGAI  PROJEK MAGANG PT.AKPA @2019 --}}
{{-- email: rubichandrap@gmail.com --}}