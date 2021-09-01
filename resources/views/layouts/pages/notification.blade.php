<!DOCTYPE html>

<html>

<head>
    @include('templates.heads')
<head>

<body>
    <div class="text-center">
        <h1>Hello SGDc Admin!</h1>
        <h2>We got another user registered!</h2>
        <p>Here's the details : </p>
        <p>Full Name : {{$package_plan}}</p>
        <p>Full Name : {{$name}}</p>
        <p>Gender : {{$gender}}</p>
        <p>Birth Place : {{$birth_place}}</p>
        <p>Birth Date : {{$birth_date}}</p>
        <p>Email : {{$email}}</p>
        <p>Phone Number : {{$phone_number}}</p>
        <p>Province Address : {{$address_province}}</p>
        <p>Regency Address : {{$address_regency}}</p>
        <p>District Address : {{$address_district}}</p>
        <p>Specify Address : {{$specify_address}}</p>
    </div>
</body>

</html>