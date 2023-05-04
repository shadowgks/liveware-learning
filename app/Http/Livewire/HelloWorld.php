<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class HelloWorld extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function removeItem($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
