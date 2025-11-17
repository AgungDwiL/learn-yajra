<?php

namespace App\Http\Controllers;

use App\Product;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        return view('produk.index');
    }

   
    public function dataProduk()
    {
        $data = Product::query();
        return DataTables::of($data)->make(true);
    }
}
