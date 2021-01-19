<?php

namespace App\Http\Livewire;

use App\Models\Restaurant;
use Livewire\Component;
use Livewire\WithPagination;

class AllRestaurant extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';
    public function render()
    {

    	$restaurant = new Restaurant();
    	$restaurants = $restaurant->getAllRestaurant();
        return view('livewire.all-restaurant',compact('restaurants'));
    }
}
