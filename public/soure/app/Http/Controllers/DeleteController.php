<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    //
    public function deleteProductDetail(Request $request){
        $id_del = $request->input('IDproduct');
        DB::table('product_detail')->where('id', '=', $id_del)->delete();
        //Gọi lại view /xoa-san-pham
        $productdetail = DB::table('product_detail')->get();;
        return view('Admin.Pages.delete', ['productdetail' => $productdetail]);
    }
}
