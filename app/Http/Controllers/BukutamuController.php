<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\BukuTamu;

class BukutamuController extends Controller
{
    
    function index(){

        /**
         * Reference https://laravel.com/docs/6.x/eloquent#retrieving-models
         */
       
        // panggil data dari model BukuTamu
        $getData = BukuTamu::all();

        return view('bukutamu', compact('getData'));
    }

    function add(){
       
        return view('bukutamu_tambah');
    }

    function store(Request $request){

        /**
         * Reference https://laravel.com/docs/6.x/eloquent#inserts
         */

        $bukuTamu = new BukuTamu;

        $bukuTamu->nama_lengkap = $request->nama;
        $bukuTamu->email = $request->email;
        $bukuTamu->alamat = $request->alamat;

        $bukuTamu->save();
       
        return redirect()->route('bukutamu');
    }

    function edit($id){

        // panggil data dari model BukuTamu dengan id $id
        $getData = BukuTamu::find($id);

        return view('bukutamu_edit', compact('getData'));
    }

    function update(Request $request){

        /**
         * Reference https://laravel.com/docs/6.x/eloquent#updates
         */

        $bukuTamu = BukuTamu::find($request->id);

        $bukuTamu->nama_lengkap = $request->nama;
        $bukuTamu->email = $request->email;
        $bukuTamu->alamat = $request->alamat;

        $bukuTamu->save();
       
        return redirect()->route('bukutamu');
    }

    function hapus(Request $request){

        /**
         *  Referensi https://laravel.com/docs/6.x/queries#deletes
         */

        $bukuTamu = BukuTamu::find($request->id);
        $bukuTamu->delete();
       
        return redirect()->route('bukutamu');
    }
}