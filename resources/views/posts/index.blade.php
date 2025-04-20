<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <x-slot name="header">

        <head>
            <meta charset="utf-8">
            <title>シェアLIVE</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
    </x-slot>

    <body>
        <h1>シェアLIVE 投稿一覧</h1>
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
            @endforeach

        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        {{ Auth::user()->name ?? 'ゲスト' }}
    </body>
</x-app-layout>

</html>