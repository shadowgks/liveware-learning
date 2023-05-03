<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function render()
    {
        return view('livewire.counter', ['count'=>$this->count]);
    }

    public function increment()
    {
        return $this->count++;
    }

    public function decrement()
    {
        if($this->count > 1){
            return $this->count--;
        }
    }
}
