<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //
    public function updateProductDetail(Request $request){
        $id = $request->input('IDproduct');
        $product_detail = DB::table('product_detail')->where('id', '=', $id)->get();


        $name = $product_detail[0]->name;
        $desc = $product_detail[0]->desc;
        $item = $product_detail[0]->item;
        $type = $product_detail[0]->type;
        $price = $product_detail[0]->price;
        $manu = $product_detail[0]->manu;
        $big_img = $product_detail[0]->big_img;
        $small_img = $product_detail[0]->small_img;
        $detail_img_1 = $product_detail[0]->detail_img_1;
        $detail_img_2 = $product_detail[0]->detail_img_2;
        $detail_img_3 = $product_detail[0]->detail_img_3;
        $detail_img_4 = $product_detail[0]->detail_img_4;

        $producttype = DB::table('product_type')->select('name')->get();
        return view('Admin.Pages.update_form', ['producttype'=>$producttype, 
                                                'id'=>$id, 
                                                'name'=>$name, 
                                                'desc'=>$desc, 
                                                'item'=>$item, 
                                                'type'=>$type, 
                                                'price'=>$price, 
                                                'manu'=>$manu, 
                                                'big_img'=>$big_img, 
                                                'small_img'=>$small_img, 
                                                'detail_img_1'=>$detail_img_1, 
                                                'detail_img_2'=>$detail_img_2, 
                                                'detail_img_3'=>$detail_img_3, 
                                                'detail_img_4'=>$detail_img_4
                                                ]);
    }
    public function updateProductDetail_form(Request $request){
        $id = $request->input('id');
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
        echo $id;
        DB::table('product_detail')
        ->where('id', $id)
        ->update([
            'price' => $price
        ]);
    }
}