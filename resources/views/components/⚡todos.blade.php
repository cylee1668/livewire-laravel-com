<?php
use Livewire\Component;
use Livewire\Attributes\Title;

new class extends Component {
    #[Title('todos22')]
    public $todo = '';
    public $pushtodo = '';
    public $todos = ['test', 'test2'];

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
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

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
