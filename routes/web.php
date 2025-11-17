<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

Route::get('/', 'ProductController@index');
Route::get('/produk', 'ProductController@dataProduk');
