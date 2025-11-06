<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class produkController extends Controller
{
public function index()
{
$produk = "Aqua 1lt";
return view("index", compact('produk'));
}
}