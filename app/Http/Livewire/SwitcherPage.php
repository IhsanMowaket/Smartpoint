<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SwitcherPage extends Component
{
    public function render()
    {
        return view('livewire.switcher-page')
        ->layout('layouts.switcher-app');
    }
}
