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
router::get('index', [
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);
router::get('loai-san-pham', [
    'as'=>'loaisanpham',
    'uses'=>'PageController@getLoaiSp'
]);
router::get('chi-tiet-san-pham', [
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChitiet'
]);
router::get('lien-he', [
    'as'=>'lienhe',
    'uses'=>'PageController@getLienHe'
]);
router::get('gioi-thieu', [
    'as'=>'gioithieu',
    'uses'=>'PageController@getGioiThieu'
]);