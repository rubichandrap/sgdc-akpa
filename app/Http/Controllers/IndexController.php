<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showIndex() {
        return view('layouts.index');
    }
    public function showFaq() {
        return view('layouts.pages.faq');
    }
}
