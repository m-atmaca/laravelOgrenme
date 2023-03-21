<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testFonk(){
        return view('denemeSayfasi');
    }

    public function detayFonk(){
        return view('detaySayfasi');
    }
}
