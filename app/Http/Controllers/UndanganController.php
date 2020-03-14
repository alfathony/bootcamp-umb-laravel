<?php

namespace App\Http\Controllers;

use App\Model\Undangan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index(){
        $getData = Undangan::all();
        return view('undangan', compact('getData'));
    }
}
