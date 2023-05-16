    <!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <x-app-layout>
        <x-slot name="header">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Posts</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        </head>
        </x-slot>
            <body>
                <div class="container px-4 m-5">
                    <div class="row gx-5">
                        <div class="col">
                            <div class="p-3 border bg-light">
                                <h3 class="title">
                                    {{ $post->title }}
                                </h3>
                                    <h4>投稿者名：{{ optional(Auth::user())->name }}</h4>
                                        <div class="content">
                                            <div class="content__post">
                                                <h5><p>概要：{{ $post->body }}</p></h5>
                                                <h5><p>活動地域：{{ $post->place }}</p></h5>
                                                <h5><p>求人数：{{ $post->recruit_nummbers }}</p></h5>
                                                <h5><p>求人パート：{{ $post->recruit_part }}</p></h5>
                                                <h5><p>性別：{{ $post->genre }}</p></h5>
                                            </div>
                                        </div>
                                        
                                        <div class="comment">
                                            <a href="/comments/{{ $post->id }}/create" class=" mb-3 btn btn-primary">コンタクトする</a>
                                        </div>
                                    <div class="edit">
                                        <a href="/posts/{{ $post->id }}/edit" class=" mb-3 btn btn-success">編集</a>
                                    </div>
                                <div class="footer">
                                    <a href="/" class="btn btn-outline-secondary">戻る</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @foreach ($post->comments as $comment)
                <div class="container px-4">
                    <div class="row gx-5">
                        <div class="col">
                            <div class="p-3 border bg-light">
                                <div class='commnet'>
                                    <h2 class='title'>{{ $comment->title }}</2>
                                    <h4>{{ $comment->user->name}}</h4>
                                    <p class='body'>{{ $comment->body }}</p>
                                </div>
                                
                                <div class="edit">
                                    <a href="/comments/{{ $comment->id }}/edit" class="mb-3 btn btn-success">コメントを編集する</a>
                                </div>
                    
                                <form action="/comments/{{ $comment->id }}" id="form_{{ $comment->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="button" class="btn btn-outline-danger" onclick="deleteComment({{ $comment->id }})">削除する</button> 
                                    <script>
                                        function deleteComment(id) {
                                            'use strict'
                                            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                                document.getElementById(`form_${id}`).submit();
                                            }
                                        }   
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </body>
        </x-app-layout>
    </html>
