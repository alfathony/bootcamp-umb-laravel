<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $data['namaPerusahaan'] = "PT Waskita Beton";

        return view('about', $data);
    }
}