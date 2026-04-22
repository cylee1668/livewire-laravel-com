<?php

use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return view('show-posts',[
            'posts' => Post::all(),
        ]);
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Post title</td>
                <td>Post content</td>
            </tr>
        </tbody>
    </table>
</div>
