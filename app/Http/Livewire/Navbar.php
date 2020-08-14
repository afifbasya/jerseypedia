<?php

namespace App\Http\Livewire;

use App\Liga;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar',[
            'ligas' => Liga::all() 
        ]);
    }
}
