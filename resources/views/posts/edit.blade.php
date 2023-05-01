<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    </x-slot>
    <body>
        <h1>Band ONE</h1>
        <form action="/posts/{{ $post->id}}" method="POST">
            
            @csrf
            @method('PUT')
            <div class="title">
                <h4>見出し</h4>
                <input type="text" name="post[title]" placeholder="例：初心者大歓迎!!" value={{ $post->title }}/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            
            
            <div class="body">
                <h4>概要</h4>
                <textarea name="post[body]" placeholder="例：関東地方で活動できる方募集してます！">{{ $post->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            
            <div class="place">
                <h4>活動地域</h4>
                <textarea name="post[place]" placeholder="例：関東地方">{{ $post->place }}</textarea>
                <p class="place__error" style="color:red">{{ $errors->first('post.place') }}</p>
            </div>
            
            <div class="recruit_nummbers">
                <h4>求人数</h4>
                <textarea name="post[recruit_nummbers]" placeholder="例：1">{{ $post->recruit_nummbers }}</textarea>
                <p class="recruit_nummbers__error" style="color:red">{{ $errors->first('post.recruit_nummbers') }}</p>
            </div>
            
            <div class="recruit_part">
                <h4>求人パート</h4>
                <textarea name="post[recruit_part]" placeholder="例：ドラム">{{ $post->recruit_part }}</textarea>
                <p class="recruit_part__error" style="color:red">{{ $errors->first('post.recruit_part') }}</p>
            </div>
            
            <div class="genre">
                <h4>性別</h4>
                <input type="radio" name="post[genre]" >男性{{ $post->genre }}</textarea>
                <input type="radio" name="post[genre]" >女性{{ $post->genre }}</textarea>
                <p class="genre__error" style="color:red">{{ $errors->first('post.genre') }}</p>
            </div>
            
            
            <input type="submit" value="update"/>
        </form>
        <div class="footer">
            <a href="/posts/{{ $post->id }}">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>
