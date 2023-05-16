<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <a class="btn btn-outline-primary" href="/posts/create" role="button">募集する</a>
                <title>Band-ONE</title>
                <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            </head>     
        </x-slot>
        <body class="antialiased">
            @foreach ($posts as $post)
                <div class="container px-4 m-5 ">
                    <div class="row gx-5">
                        <div class="col">
                            <div class="p-3 border bg-light">
                                <div class='post'>
                                    <h2 class='title'>
                                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                                    </h2>
                                    <h4>投稿者名：{{ optional(Auth::user())->name }}</h4>
                                    <p class='body'>{{ $post->body }}</p>
                                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-outline-secondary" onclick="deletePost({{ $post->id }})">削除する</button> 
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
                            </div>
                         </div>
                    </div>
                </div>
                @endforeach
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
