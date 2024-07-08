<?php

namespace App\Livewire\Front;

use App\Models\Animal;
use Livewire\Component;

class Home extends Component
{

    public $title;

    public function mount()  
    {
        $this->title = 'test';
    }

    public function render()
    {
        return view('components.home');
    }
}
