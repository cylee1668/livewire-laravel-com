<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    the current time is: {{ time() }}
    <button wire:click="$refresh">Refresh</button>
</div>
