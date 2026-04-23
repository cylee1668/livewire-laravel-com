<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'title1',
            'content' => 'content1',
        ]);

        Post::create([
            'title' => 'title2',
            'content' => 'content2',
        ]);

        Post::create([
            'title' => 'title3',
            'content' => 'content3',
        ]);
    }
}
