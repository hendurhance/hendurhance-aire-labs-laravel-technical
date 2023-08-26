<?php

namespace App\Livewire;

use Livewire\Component;

class RatingComponent extends Component
{
    public int $rating;

    public int $max = 5; // Default maximum rating

    public function render()
    {
        return view('livewire.rating-component');
    }
}
