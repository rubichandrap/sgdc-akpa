<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProducts(){
        return view('layouts.pages.products');
    }
}
