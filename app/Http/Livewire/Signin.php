<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Signin extends Component
{
    public function render()
    {
        return view('livewire.signin.blade.old.php')
        ->layout('layouts.custom-app');
    }
}
