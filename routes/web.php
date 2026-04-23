<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/counter', function () {
//     return view('counter');
// });

Route::livewire('/','todos');
Route::livewire('/counter', 'counter');
Route::livewire('/show-posts','show-posts');
Route::livewire('/create-post','create-post');
