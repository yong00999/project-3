<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CustomerVoucher;
use DB;
use Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function add(Request $r){
        $r->validate([
            'productCartID'=>'required|unique:carts',
        ]);
        $addItem=Cart::create([
        'quantity'=>$r->quantity,
        'orderID'=>'',
        'productID'=>$r->productID,
        'productCartID'=>$r->productCartID,
        'userID'=>Auth::id(),
        ]);
        session()->flash('success', 'Item Cart is Updated Successfully !');
        Return redirect()->route('myCart');
    }

    public function showMyCart(Request $r){
        $carts=DB::table('carts')
        ->leftjoin('products','products.productID','=','carts.productID')
        ->leftjoin('users','users.id','=','carts.userID')
        ->select('products.name as cartName','carts.id as cid','carts.quantity as cartQty', 'products.*','users.email as email','users.contact as contact')
        ->where('carts.orderID','=','')
        ->where('carts.userID','=',Auth::id())
        ->get();
        $email=DB::table('users')
        ->leftjoin('carts','carts.userID','=','users.id')
        ->select('users.*')
        ->where('carts.userID','=',Auth::id())
        ->take(1)
        ->get();
        $contact=DB::table('users')
        ->leftjoin('carts','carts.userID','=','users.id')
        ->select('users.*')
        ->where('carts.userID','=',Auth::id())
        ->take(1)
        ->get();
    Return view('shoppingCartPage',compact('email','contact'))->with('carts',$carts);
    }

    public function delete($id){
        $data=Cart::find($id);
        $data->delete();
        session()->flash('success', 'Item Cart is Delete Successfully !');
        Return redirect()->route('myCart');
    }
    public function update()
    {
        $r=request();
        $cart=Cart::find($r->cid);
        $cart->quantity=$r->quantity;
        $cart->save();

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('myCart');
    }
}
