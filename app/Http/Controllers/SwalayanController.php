<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SwalayanController extends Controller
{
    public function barang()
    {
        $data = DB::table('barang')->get();
        return view('barang.index', compact('data'));
    }

    public function kasir()
    {
        $data = DB::table('kasir')->get();
        return view('kasir.index', compact('data'));
    }
}