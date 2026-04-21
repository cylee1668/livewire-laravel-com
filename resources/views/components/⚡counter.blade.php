<?php

use Livewire\Component;

new class extends Component
{
    public $count = 1;

    public function increment()
    {
        $this -> count++;
    }

    public function decrement()
    {
        $this -> count--;
    }
};

?>

<div>
    Count: {{ $count }}

    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
</div>
