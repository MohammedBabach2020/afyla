<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Wishlist extends Component
{

    public $addo,$pro,$user;
    protected $queryString = ['addo'];

public function add(Request $req) {

    $pro = \App\Product::where('id',$this->addo)->first();

$price = \App\Size::where('id',$this->addo)->first();

    $user = $req->session()->get('logged');    

    // $product = \App\WishModel::create([
    //     'name' => $pro->name,
    //     'price' => 5,
    //     'prodId' => $pro->id,
    //     'UserId' => $user,
      
    // ]);




}

    public function render()
    {
        return view('livewire.wishlist',[
            'posts' => $this->addo,]);
    }
}
