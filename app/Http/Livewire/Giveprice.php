<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Giveprice extends Component
{

    public $sizy;
    public $price;


    public function clicki() {

    
    }

    public function render()
    {
        return view('livewire.giveprice',['price' => \App\Size::where('id',$this->sizy)->first(),]);
    }
}
