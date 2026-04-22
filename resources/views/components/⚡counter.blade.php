<?php

use Livewire\Component;
use Livewire\Attributes\Title;
new class extends Component
{
    #[Title('Counter!!')]
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
