<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Plat;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
    	$categories = Category::getAllCategory();
        return view('livewire.navbar',['categories' => $categories]);
    }
}
