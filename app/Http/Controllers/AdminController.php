<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        if(session()->has('logged')){
            $aut = \App\User::where('id',session()->get('logged'))->first();
            $users = \App\User::count();
        $orders = \App\Order::count(); 
        $user_orders = \App\Order::count(); 

            return view('admin.index',compact('aut','users','orders','user_orders'));
        }else{
            return redirect('/');
        }
       
   
    }

    public function products()
    {
        $products = \App\Product::orderby('id','DESC')->get();
        $categories = \App\Category::all();

        return view('admin.products',compact('products','categories'));
    }

    public function categories()
    {
        $categories = \App\Category::orderby('id','DESC')->get();

        return view('admin.categories',compact('categories'));
    }

    public function users()
    {
        $users = \App\User::orderby('id','DESC')->get();

        return view('admin.users',compact('users'));
    }

    public function orders()
    {
        $orders = \App\Order::orderby('id','DESC')->get();

        return view('admin.orders',compact('orders'));
    }

    public function infos()
    {
        $infos = \App\Info::where('id',1)->first();

        return view('admin.infos',compact('infos'));
    }

    public function editinfos(Request $req)
    {
        $ship = \DB::table('infos')->where('id',1)->update([
'address' => $req->address,
'phone' => $req->phone,
'email' => $req->email,
        ]);
        return redirect()->back();
    }

    public function shipping(Request $req)
    {
        $ship = \DB::table('ship')->where('id',1)->update([
'shipping' => $req->price,
        ]);
        return redirect()->back();
    }
}
