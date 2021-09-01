<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Provinces;
use App\Regencies;
use App\Districts;

class RegisterController extends Controller
{
    public function showRegister()
    {
        $provinces = Provinces::all()->pluck('name', 'id');
        return view('layouts.pages.register', compact('provinces'));
    }

    public function regencies($id)
    {
        $regencies = Regencies::where('province_id', $id)->pluck('name', 'id');
        return json_encode($regencies);
    }

    public function districts($id)
    {
        $districts = Districts::where('regency_id', $id)->pluck('name', 'id');
        return json_encode($districts);
    }
}
