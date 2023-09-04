<?php

namespace App\Livewire;

use Livewire\Component;

class Loading extends Component
{
    public $isLoading = false;

    public function render()
    {
        return view('livewire.loading');
    }
}
