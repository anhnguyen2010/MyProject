<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\ProductType;
use App\User;
use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Hash;
use Session;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product=Product::where('new', 1)->paginate(4);
        $sanpham_khuyenmai=Product::where('promotion_price', '<>', 0)->paginate(8);
        return view('page.trangchu', compact('slide', 'new_product', 'sanpham_khuyenmai'));
    }

    /**
     * @param $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function getLoaiSp($type){
        $sp_theoloai = Product::where('id_type', $type)->get();
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);
        $loai = ProductType::all();
        $loai_sp = ProductType::where ('id', $type)->first();
        return view('page.loai_sanpham', compact('sp_theoloai', 'sp_khac', 'loai'));
    }
    public  function getChitiet(Request $req){
        $sanpham = Product::where('id', $req->id)->first();
        $sp_tuongtu = Product::where('id_type', $sanpham->id_type)->paginate(6);
        return view('page.chitiet_sanpham', compact('sanpham', 'sp_tuongtu'));
    }
    public function getLienHe(){
        return view('page.lienhe');
    }
    public function getGioiThieu(){
        return view('page.gioithieu');
    }
    public function getAddtoCart(Request $req,  $id){
        $product = Product::find($id);
        $oldCart= Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items)>0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getLogin(){
        return view('page.dangnhap');
    }
    public function getSignin(){
        return view('page.dangky');
    }
    public function postSignin(Request $req){
        $this->validate( $req,
            [
                'email'=>'required|email|unique:users, email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'vui lòng nhập email',
                'email.email'=>'không đúng định dạng email',
                'email.unique'=>'email đã có người sử dụng',
                'password.required'=>'vui lòng nhập mật khẩu',
                're_password.same'=>'mật khẩu không đúng',
                'password.min'=>'mật khẩu ít nhất 6 ký tự',
            ]
        );
        $user=new User();
        $user->full_name=$req->fullname;
        $user->email=$req->email;
        $user->password= Hash::make($req->password);
        $user->phone=$req->phone;
        $user->address=$req->address;
        $user->save();
        return redirect()->back ()->with('thanhcong', 'tao tai khoan thanh cong');
    }
}
