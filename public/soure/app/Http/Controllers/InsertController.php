<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    //
    public function insertProductDetail(Request $request){

        $name = $request->input('productname');
        $desc = $request->input('desc');
        $item = $request->input('productitem');
        $type = $request->input('producttype');
        $price = $request->input('price');
        $manu = $request->input('productmanu');
        $big_img = '';
        $small_img = '';
        $detail_img_1 = '';
        $detail_img_2 = '';
        $detail_img_3 = '';
        $detail_img_4 = '';

        if ($request->hasFile('big_img') != null) {
            $file = $request->file('big_img');
            $nameimg = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('big_img')->move("Uploaded_image_detai_product/big_imge", $nameimg);
            $big_img = 'Uploaded_image_detai_product/big_imge/'.$nameimg;
        }
        if ($request->hasFile('small_img') != null) {
            $file = $request->file('small_img');
            $nameimg = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('small_img')->move("Uploaded_image_detai_product/small_img", $nameimg);
            $small_img = 'Uploaded_image_detai_product/small_img/'.$nameimg;
        }
        if ($request->hasFile('detail_img_1') != null) {
            $file = $request->file('detail_img_1');
            $nameimg = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('detail_img_1')->move("Uploaded_image_detai_product/detail_image_1", $nameimg);
            $detail_img_1 = 'Uploaded_image_detai_product/detail_image_1/'.$nameimg;
        }
        if ($request->hasFile('detail_img_2') != null) {
            $file = $request->file('detail_img_2');
            $nameimg = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('detail_img_2')->move("Uploaded_image_detai_product/detail_image_2", $nameimg);
            $detail_img_2 = 'Uploaded_image_detai_product/detail_image_2/'.$nameimg;
        }
        if ($request->hasFile('detail_img_3') != null) {
            $file = $request->file('detail_img_3');
            $nameimg = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('detail_img_3')->move("Uploaded_image_detai_product/detail_image_3", $nameimg);
            $detail_img_3 = 'Uploaded_image_detai_product/detail_image_3/'.$nameimg;
        }
        if ($request->hasFile('detail_img_4') != null) {
            $file = $request->file('detail_img_4');
            $nameimg = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
            $request->file('detail_img_4')->move("Uploaded_image_detai_product/detail_image_4", $nameimg);
            $detail_img_4 = 'Uploaded_image_detai_product/detail_image_4/'.$nameimg;
        }
        $data = array(
            'name' => $name,
            'desc' => $desc,
            'item' => $item,
            'type' => $type,
            'price' => $price,
            'manu' => $manu,
            'big_img' => $big_img,
            'small_img' => $small_img,
            'detail_img_1' => $detail_img_1,
            'detail_img_2' => $detail_img_2,
            'detail_img_3' => $detail_img_3,
            'detail_img_4' => $detail_img_4
        );
        DB::table('product_detail')->insertGetId($data);
    }
}