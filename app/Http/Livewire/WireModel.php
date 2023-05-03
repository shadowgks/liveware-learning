<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WireModel extends Component
{

    public $title = 'saad';
    public $test = false;
    public $select = '...';
    public $multiple = [''];

    public function render()
    {
        return view('livewire.wire-model');
    }
}
