<?php
use App\Models\Post;
use Livewire\Component;

new class extends Component {
    // public function render()
    // {
    //     return view('show-posts',[
    //         'posts' => Post::all(),
    //     ]);
    // }
    public $posts = [];

    public function mount()
    {
        $this->posts = Post::all();
    }


    public function delete()
    {

    }
};
?>

<div>
    <h2>Posts:</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr wire:key="{{ $post->id }}">
                    <td>{{ $post->title }}</td>
                    <td>{{ str($post->content)->words(8) }}</td>
                    <td>
                        <button type="button" wire:click="delete({{ $post->id }})">Delete</button>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
