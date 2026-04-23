<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="/app.css">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <nav>
            <a href="/" @class(['current' => request()->is('/')])>Todo</a>
            <a href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
            <a href="/show-posts" @class(['current' => request()->is('show-posts')])>show-posts</a>
            <a href="/create-post" @class(['current' => request()->is('create-post')])>create-post</a>
        </nav>


        {{ $slot }}

        @livewireScripts
    </body>
</html>
