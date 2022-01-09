<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Session;
use App\Models\Category;

class productController extends Controller
{
    
    public function productdetail($id){
        $products=Product::all()->where('id',$id);
        (new CartController)->cartItem(); 
        return view('productDetail')->with('products',$products);
    }
            
    public function viewProduct(){

        $products=Product::all();
        (new CartController)->cartItem(); // call cartController function
        //App('App\Http\Controllers\CartController')->cartItem();
        return view('viewProduct')->with('products',$products);
    }

    public function searchProduct(){
        $r=request();
        $keyword=$r->keyword;
        $products=DB::table('products')->where('name','like','%'.$keyword.'%')->get();
        return view('viewProduct')->with('products',$products);
    }

    public function viewPhone(){
        $products=DB::table('products')->where('CategoryID', '=', '1')->get();
        return view('viewProduct')->with('products',$products);
    }

    public function viewComputer(){
        $products=DB::table('products')->where('CategoryID', '=', '2')->orWhere('CategoryID', '=', '3')->get();
        return view('viewProduct')->with('products',$products);
    }

}

