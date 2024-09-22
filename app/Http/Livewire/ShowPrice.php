<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPrice extends Component

{

    public $products,$sizy,$price;
    protected $queryString = ['sizy'];

    public function give() {

        $price = \App\Size::where('id',$this->sizy)->first();
    
    }

    public function render()
    {
        $this->price = \App\Size::where('id',$this->sizy)->first();
        return view('livewire.show-price', [
            'products' => $this->products, 'price' => $this->price,
        ]);
    }
}
