<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        
        <div class="content">
            <div class="content__post">
                
                <h2><p>{{ $post->body }}</p></h2>
                <h5>活動地域</h5>
                <h3><p>{{ $post->place }}</p></h3>
                <h5>求人数</h5>
                <h3><p>{{ $post->recruit_nummbers }}</p></h3>
                <h5>求人パート</h5>
                <h3><p>{{ $post->recruit_part }}</p></h3>
                <h5>性別</h5>
                <h3><p>{{ $post->genre }}</p></h3>

            </div>
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">編集</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
