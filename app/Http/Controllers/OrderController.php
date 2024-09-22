<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    public function add(Request $req) {
        $pri = \App\Size::where('id',$req->goid)->firstOrFail();
        $pro = \App\Product::where('id',$pri->prod_id)->firstOrFail();
        $cartItem = Cart::add([
            'id' => $pro->id,
            'name' => $pro->name,
            'qty' => 1,
            'price' => $pri->price,
            'weight' => 0,
            'options' => ['size' => $pri->size]
        ]);
        
$req->session()->put('add', $pro->id);
        return redirect()->back();
    }
    
    public function addnow(Request $req) {
        $pro = \App\Product::where('id',$req->id)->first();
        $pri = \App\Size::where('id',$req->siz)->first();
        $cartItem = Cart::add([
            'id' => $pro->id,
            'name' => $pro->name,
            'qty' => $req->qty,
            'price' => $pri->price,
            'weight' => 0,
            'options' => ['size' => $pri->size]
        ]);
        $req->session()->put('add', $pro->id);
        return redirect('/cart');
    }

    public function remove(Request $req) {
        Cart::remove($req->id);
        $req->session()->forget('add');
        toastr()->error('Item deleted succesfully');
        return redirect()->back();
    }

    public function update(Request $request) {
        $qty = $request->qty;
        $id = $request->id;
        Cart::update($id, $qty);
        toastr()->info('Quantity updated seccesfully');
        return redirect()->back();
}

public function confirm(Request $req) {
    if($req->confirm == 1){
        $confirm = \App\Order::where('id',$req->id)->update([
            'etat' => 0,
        ]);
        return redirect()->back();
    }
    if($req->confirm == 0){
        $confirm = \App\Order::where('id',$req->id)->update([
            'etat' => 1,
        ]);
        return redirect()->back();
    }
    
}

public function checkout(Request $request) {
        $order = \App\Order::create([
            'client_name' => $request->name,
            'client_phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'montant' => Cart::subtotal(),

        ]);
        foreach(Cart::content() as $item ) {
            $prod = \App\Product::where('id',$item->id)->first();
            $order_det = \App\OrderDetail::create([
            'order_id' => $order->id,
            'product' => $prod->name,
            'qty' => $item->qty,
            'price' => $item->price,
            'montant' => $item->price * $item->qty,
        ]);
        $stock = $prod->stock - ( $item->options->size * $item->qty );
        $product = \App\Product::where('id',$item->id)->update([
            
            'stock' => $stock,

        ]);
        
        }
        
        
        Cart::destroy();
        $request->session()->forget('add');
        return redirect('/thank-you');
    }

}
