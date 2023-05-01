<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    </x-slot>
    <body class="antialiased">
        <h1>Band ONE</h1>
        <a href="/posts/create">create</a>
            <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                    <span>
                    @if (!$post->likes->isEmpty())
                        @foreach ($post->likes as $like)
                            @if ($like->user_id == Auth::id())
                                <a href="{{ route('unlike', $post) }}" class="btn btn-danger ms-2">
                                    🤍
                                    <span class="badge">
                                        {{ $post->likes->count() }}
                                    </span>
                                </a>
                           @else 
                                <a href="{{ route('like', $post) }}" class="btn btn-outline-primary ms-2">
                                    ❤️
                                    <span class="badge text-black">
                                        {{ $post->likes->count() }}
                                    </span>
                                </a>
                            @endif
                        @endforeach
                    @else
                                <a href="{{ route('like', $post) }}" class="btn btn-outline-primary ms-2">
                                    ❤️
                                    <span class="badge text-black">
                                        {{ $post->likes->count() }}
                                    </span>
                                </a>
                    @endif
                    </span>
                </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
        function deletePost(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
    </body>
    </x-app-layout>
</html>
