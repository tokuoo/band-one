<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Blog_comment</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    </x-slot>
    <body>

                
        <form action="/comments/{{$post->id}}" method="POST">
            <div class="container px-4">
            <div class="row gx-5">
            <div class="col">
            <div class="p-3 border bg-light">
            <p class="text-primary">コメント作成</p>
            @csrf
            <div class="title">
                <h4>見出し</h4>
                
                <input type="text" name="comment[title]" class="block mt-1 w-full rounded-2" placeholder="例：お願いします" value="{{ old('commnet.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('comment.title') }}</p>
            </div>
            
            
            <div class="body">
                <h4>概要</h4>
                <textarea name="comment[body]" class="block mt-1 w-full rounded-2" placeholder="例：関東に住んでます。">{{ old('comment.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('comment.body') }}</p>
            </div>
            
            <input type="submit" class="mb-3 btn btn-info" value="コメントする"/>
        </form>
        <div class="footer">
            <a href="/posts/{{ $post->id }}" class="btn btn-outline-secondary">戻る</a>
        </div>
        </div>
        </div>
        </div>
        </div>
    </body>
    </x-app-layout>
</html>
