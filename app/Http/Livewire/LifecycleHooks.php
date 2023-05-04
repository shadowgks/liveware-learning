<?php

namespace App\Http\Livewire;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Livewire\Component;

class LifecycleHooks extends Component
{
    public $name = 'Hello';

    public function mount($name)
    {
        // $this->name = $request->input('name', $name); //you must write Request in parametre mount
        $this->name = $name;
    }

    // public function hydrate()
    // {
    //     $this->name = '@hydrated@';
    // }

    public function updated($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.lifecycle-hooks');
    }
}
