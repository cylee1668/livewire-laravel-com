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
Route::livewire('/show-post','show-posts');
