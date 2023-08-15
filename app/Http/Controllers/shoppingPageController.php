<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use App\Models\Supplier;
use Session;
use Auth;
use DB;

class shoppingPageController extends Controller
{
    public function view(){

        $product=DB::table('products')
        
        
        ->leftjoin('categories','categories.categoryID','=','products.categoryID')
   
        ->select(
            
            'products.*','categories.name as catname',
          
            )
        ->where('products.status','=','Available')
        ->paginate(600);  

        Return view('shoppingShowProductPage')->with('products',$product)
                                              ->with('categoryID',category::all());
                                            

    }

    public function viewContact(){

        Return view('shoppingShowProductPage');

    }

    public function viewDetails($id){
        $products=product::all()->where('id',$id);
        $uid=Auth::id();
        //select * from where id='$id'

        Return view('shoppingShowProductDetails',compact('uid'))->with('products',$products)
                                                 ->with('categoryID',category::all());
                                               

    }

    public function searchProduct(){
        $r=request();
        $keyword=$r->keyword;
        $product=DB::table('products')
        ->leftjoin('categories','categories.categoryID','=','products.categoryID')
   
        ->select(
           
            'products.*','categories.id as catid','categories.name as catname'
           
            )
        ->where('products.productID','like','%'.$keyword.'%')
        ->orWhere('products.name','like','%'.$keyword.'%')
        ->orWhere('products.categoryID','like','%'.$keyword.'%')
        
        //select * from products where name like '%$keyword%'
        ->paginate(600);

        Return view('shoppingShowProductPage')->with('products',$product)
                                              ->with('categoryID',category::all());
                                              
    }

    public function getProduct($cid){
        $product=DB::table('products')
        
        ->leftjoin('categories','categories.categoryID','=','products.categoryID')
       
        ->select(
           
            'products.*','categories.id as catid','categories.name as catname',
          
            )
        ->where('products.categoryID','=', $cid)
        //select * from products where name like '%$keyword%'
        ->paginate(600);

        Return view('shoppingShowProductPage')->with('products',$product)
                                              ->with('categoryID',category::all());
                                           
    }

    public function priceLTH(){
        $product=DB::table('products')
        
       
        ->leftjoin('categories','categories.categoryID','=','products.categoryID')
    
        ->select(
          
            'products.*','categories.name as catname',
         
            )
        ->where('products.status','=','Available')
        ->orderBy('price','asc')
        ->paginate(600);  

        Return view('shoppingShowProductPage')->with('products',$product)
                                              ->with('categoryID',category::all());
                                         
    }

    public function priceHTL(){
        $product=DB::table('products')
        
       
        ->leftjoin('categories','categories.categoryID','=','products.categoryID')
    
        ->select(
            
            'products.*','categories.name as catname',
           
            )
        ->where('products.status','=','Available')
        ->orderBy('price','desc')
        ->paginate(600);  

        Return view('shoppingShowProductPage')->with('products',$product)
                                              ->with('categoryID',category::all());
                                             
    }

}
