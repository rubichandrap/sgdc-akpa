<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Mail;

use App\User;

class PostController extends Controller
{

    public function storeRegister(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z ]+$/'],
            'gender' => ['required', 'string'],
            'birth_place' => ['required', 'string', Rule::notIn(['', '0'])],
            'birth_date' => ['required', 'date', 'date_format:Y-m-d', 'after:1900-01-01', 'before:today'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string', 'min:9', 'max:15', 'regex:/^[0-9]+$/', 'unique:users'],
            'address_province' => ['required', 'string', Rule::notIn(['', '0'])],
            'address_regency' => ['required', 'string', Rule::notIn(['', '0'])],
            'address_district' => ['required', 'string', Rule::notIn(['', '0'])],
            'specify_address' => ['required', 'string', 'max:75'],
            'package_plan' => ['required', 'string'],
            'g-recaptcha-response' => ['required', 'captcha'],
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        else {
            $user = new User();
            $user->package_plan = $request->get('package_plan');
            $user->name = $request->get('name');
            $user->gender = $request->get('gender');
            $user->birth_place = DB::table('provinces')
            ->where('id', $request['birth_place'])->pluck('name');
            $user->birth_date = $request->get('birth_date');
            $user->address_province = DB::table('provinces')
            ->where('id', $request['address_province'])->pluck('name');
            $user->address_regency = DB::table('regencies')
            ->where('id', $request['address_regency'])->pluck('name');
            $user->address_district = DB::table('districts')
            ->where('id', $request['address_district'])->pluck('name');
            $user->specify_address = $request->get('specify_address');
            $user->email = $request->get('email');
            $user->phone_number = $request->get('phone_number');
            
            $birth_placeExplode = explode('"', $user->birth_place);
            $address_provinceExplode = explode('"', $user->address_province);
            $address_regencyExplode = explode('"', $user->address_regency);
            $address_districtExplode = explode('"', $user->address_district);

            $user->birth_place = $birth_placeExplode[1];
            $user->address_province = $address_provinceExplode[1];
            $user->address_regency = $address_regencyExplode[1];
            $user->address_district = $address_districtExplode[1];

            $data = [
                'package_plan' => $user->package_plan,
                'name' => $user->name,
                'gender' => $user->gender,
                'birth_place' => $user->birth_place,
                'birth_date' => $user->birth_date,
                'address_province' => $user->address_province,
                'address_regency' => $user->address_regency,
                'address_district' => $user->address_district,
                'specify_address' => $user->specify_address,
                'email' => $user->email,
                'phone_number' => $user->phone_number,
            ];

            Mail::send('layouts.pages.notification', $data, function($message) use ($data){
                $message->from('registration@akpa.net.id');
                $message->subject('User Registration Notify ' . $data['name']);
                $message->to('registration@akpa.net.id');
            });

            $user->save();
            return redirect('/register/complete');
        }
    }

    public function goRegister() {
        return redirect('/register');
    }

    public function doneRegister() {
        return view('layouts.pages.complete');
    }
}
