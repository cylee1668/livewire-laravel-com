<?php

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Rule;

new class extends Component {
    // public function render()
    // {
    //     return view('create-post');
    // }

    #[Rule('required', message: 'Yo, the title')]
    #[Rule('min:4', message: 'Yo, short')]
    public $title = '';

    #[Rule('required', as: '中文da context')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/show-posts');
    }
};
?>

<div>
    <h2>New Post:</h2>

    <div x-data="{ count: 0 }">
        <span x-text="count"></span>
        <button x-on:click="count++">+</button>
    </div>

    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            @error('title')
                <em>{{ $message }}</em>
            @enderror


        </label>

        <label>
            <span>Content</span>
            <textarea wire:model="content"></textarea>
            @error('content')
                <em>{{ $message }}</em>
            @enderror
            <button type="submit">Save</button>
        </label>
    </form>
</div>
