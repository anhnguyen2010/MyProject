<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('them-san-pham', function () {
    $producttype = DB::table('product_type')->select('name')->get();;
    return view('Admin.Pages.insert', ['producttype' => $producttype]);
});