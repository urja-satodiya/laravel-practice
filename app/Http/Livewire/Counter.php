<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name = "Urja";

    // Lifecycle hook called at the initial stage when page is loaded or rendered
    // just like Vue mount method or __constructor
    public function mount($name)
    {
        $this->name = $name;
    }

    /**
     * Another lideCycle hook
     * Called as soon as event is fired 
     * 
     * For Ex: If we are typing into the text box,
     * This is call as soon as we type any single character
     */
    public function hydrate()
    {
        
    }

    /**
     * Updated is going to run anytime when we 
     * update any public property of the component
     * Call after updating the property value
     */
    public function updated()
    {
        # code...
    }

    /**
     * Call before updating the propery value
     */
    public function updating()
    {
        
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
