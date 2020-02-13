<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukutamuController extends Controller
{
    function index(){
       

        return view('bukutamu');
    }
}