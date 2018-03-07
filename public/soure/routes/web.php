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
Route::get('/', function () {

    //return view('Admin.Layouts.layout');
    return view('Admin.Pages.home');
});
/*
|Routing thêm sản phẩm
|
*/
Route::get('them-san-pham', function () {
    $producttype = DB::table('product_type')->select('name')->get();;
    return view('Admin.Pages.insert', ['producttype' => $producttype]);
});
Route::get('insertproduct', function(){ return 'Halo'; });
Route::post('insertproduct', 'InsertController@insertProductDetail');
/*
|Routing xóa sản phẩm
*/
Route::get('/xoa-san-pham', function () {
    $productdetail = DB::table('product_detail')->get();;
    return view('Admin.Pages.delete', ['productdetail' => $productdetail]);
});
Route::get('deleteproduct', function(){ return 'Halo'; });
Route::post('deleteproduct', 'DeleteController@deleteProductDetail');
/*
|Routing thêm sản phẩm
|
*/
Route::get('cap-nhat-san-pham', function () {
    $productdetail = DB::table('product_detail')->get();;
    return view('Admin.Pages.update', ['productdetail' => $productdetail]);
});
Route::get('updateproduct', function(){ return 'Halo'; });
Route::post('updateproduct', 'UpdateController@updateProductDetail');

Route::get('updateproduct_form', function(){ return 'Halo'; });
Route::post('updateproduct_form', 'UpdateController@updateProductDetail_form');
/*
|Routing chức năng auth Laravel
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
