<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\Facades\Cart;


class FrontController extends Controller
{
    public function index()
    {
        if(session()->has('started')){
            $products = \App\Product::where('trends', 1)->orderBy('id','DESC')->get();
            $categories = \App\Category::all();
            return view('front.index',compact('categories','products'));
        }
        else{
            $continent = \DB::table('countries')->orderBy('continent', 'asc')
            ->groupBy('continent')
            ->get();
            return view('front.start',compact('continent'));
        }
    }
    
    public function about()
    {
        return view('front.about');
    }

    public function test()
    {
        return view('front.test');
    }

    public function shop($category)
    {
        $cat = $category;
        $products = \App\Product::where('category',$category)->orderby('id','DESC')->get();
        return view('shop.cat',compact('cat','products'));
    }

    public function thank()
    {
        Cart::destroy();

        return view('front.thank');
    }
    public function address()
    {
        return view('front.address');
    }

    public function cat($category)
    {
        $cat = $category;
        $products = \App\Product::where('category',$category)->orderby('id','DESC')->get();
        return view('front.cat',compact('cat','products'));
    }

    public function prod($id)
    {
        $products = \App\Product::where('id',$id)->first();
        $price = \App\Size::where('prod_id',$products->id)->first();
        

        
        return view('front.product',compact('products','price'));
    }

    public function cart()
    {
        return view('front.cart');
    }

    public function wish()
    {
        return view('front.wish');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
    
    public function search(Request $request)
    {
        $query = $request->input('label');
        
            $products = \App\Product::where('name', 'like', "%$query%")->orwhere('category', 'like', "%$query%")->get();
            
            return view('front.search',compact('products','query'));
       
   
    }
}
