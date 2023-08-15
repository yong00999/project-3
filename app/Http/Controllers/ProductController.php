<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use Session;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Contracts\Session\Session as SessionSession;

class ProductController extends Controller
{


    public function store(){

        $r=request();
        $image=$r->file('product-image');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();

        $addProduct=product::create([

            'productID'=>$r->productID,
            'name'=>$r->productName,
            'description'=>$r->productDescription,
            'quantity'=>$r->productQuantity,
            'price'=>$r->productPrice,
            'image'=>$imageName,
            'categoryID'=>$r->categoryID,
            'downloadLink'=>$r->downloadLink,
            'status'=>$r->status,
        ]);
        Return redirect()->route('viewProduct');
    }
    public function view(){
        
        $product=DB::table('products')

        
        ->leftjoin('categories','categories.categoryID','=','products.categoryID')

        ->select(
            
            'products.*','categories.name as catname'
           
            )
        
        ->paginate(200);
        
        Return view('admin.showProduct')->with('products',$product);

    }

    public function product(){
        $product=product::all();//apply SQL select * from categories
        Return view('admin.insertProduct')->with('products',$product);
    }

    public function edit($id){
        $products=product::all()->where('id',$id);
        //select * from where id='$id'

        Return view('admin.editProduct')->with('products',$products)
                                    ->with('categoryID',category::all());
                                    
    }

    public function update(){
        $r=request();
        $products=product::find($r->id); //retrieve the record based on id

        if($r->file('product-image')!=''){
            $image=$r->file('product-image');
            $image->move('images',$image->getClientOriginalName());   //images is the location
            $imageName=$image->getClientOriginalName();  //upload image
            $products->image=$imageName; //update product table record
        }

        $products->productID=$r->productID;
        $products->name=$r->productName;
        $products->description=$r->productDescription;
        $products->quantity=$r->productQuantity;
        $products->price=$r->productPrice;
        $products->categoryID=$r->categoryID;
        $products->downloadLink=$r->downloadLink;
        $products->status=$r->status;
        $products->save();
        Session::flash('success',"Product updated successfully!");

        Return redirect()->route('viewProduct');
    }

    public function delete($id){
        $data=product::find($id);
        $data->delete();
        Return redirect()->route('viewProduct');
    }

    public function adminSearchProduct(){
        $r=request();
        $keyword=$r->keyword;
        $product=DB::table('products')
      
        ->leftjoin('categories','categories.categoryID','=','products.categoryID')
       
        ->select(
           
            'products.*','categories.id as catid','categories.name as catname',
            
            )
        
        ->orWhere('products.name','like','%'.$keyword.'%')
        ->orWhere('categories.name','like','%'.$keyword.'%')
       
     
        //select * from products where name like '%$keyword%'
        ->paginate(6);

        Return view('admin.showProduct')->with('products',$product)
                                              ->with('categoryID',category::all());
                                        
                                            
    }

}
