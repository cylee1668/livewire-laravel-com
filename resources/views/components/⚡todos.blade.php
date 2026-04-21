<?php

use Livewire\Component;

new class extends Component {
    public $todo = '';

    public $pushtodo = '';

    public $todos = [];

    public function add()
    {
        if ($this->todo != '') {
            $this->todos[] = $this->todo;
            $this->reset('todo');
        }
    }

    public function mount() {
        $this->todos = [
            'Take out trash', 'Do dishes',
        ];
    }

    public function updated($property, $value)
    {
        $this->$property = strtoupper($value);

        $this->validate();
    }

    public function push()
    {
        //$todos->push('New Task'); // 這是 Laravel 寫好的方法
        $this->todos = collect($this->todos)->push($this->pushtodo)->all();
    }

    public function resetArray()
    {
        $this->reset('todos');
    }
};

?>

<div>
    <form wire:submit="add">
        <input type="text" wire:model.live.change="todo">
        <span>Current todo: {{ $todo }}</span>
        <button type="submit">Add</button>
    </form>
    <br />

    <input type="text" wire:model.live.blur="pushtodo">
    <span>Current todo: {{ $pushtodo }}</span>
    <button type="button" wire:click="push">PUSH</button>

    <br />
    <button type="button" wire:click="resetArray">resetArray</button>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
