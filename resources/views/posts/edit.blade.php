<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    </x-slot>
    <body>
        
        <div class="container px-4">
            <div class="row gx-5">
            <div class="col">
            <div class="p-3 border bg-light">
        <form action="/posts/{{ $post->id}}" method="POST">
            
            @csrf
            @method('PUT')
            <div class="title">
                <x-input-label for="name" :value="__('見出し')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="post[title]" placeholder="例：初心者大歓迎!!" value="{{ $post->title }}"  autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                
               <!-- <input type="text" name="post[title]" placeholder="例：初心者大歓迎!!" value={{ $post->title }}/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>-->
            </div>
            
            
            <div class="body">
                <h4><x-input-label for="name" :value="__('概要')" /></h4>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="post[body]" placeholder="例：関東地方で活動中！" value="{{ $post->body }}"  autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            
            <div class="place">
                <h4>活動地域</h4>
                <select name="post[place]"class="rounded-2" >{{ old('post.place') }}
                <option value=""></option>
                <option>指定なし</option>
                <option>北海道</option>
                <option>東北地方</option>
                <option>関東地方</option>
                <option>中部地方</option>
                <option>近畿地方</option>
                <option>中国地方</option>
                <option>四国地方</option>
                <option>九州地方</option>
                <option>沖縄</option>
                
                </select>
                <p class="place__error" style="color:red">{{ $errors->first('post.place') }}</p>
            </div>
            
            <div class="recruit_nummbers">
                <h4>求人数</h4>
                <select name="post[recruit_nummbers]"class="rounded-2" >{{ old('post.recruit_nummbers') }}
                <option value=""></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>それ以上</option>
                
                </select>
                <p class="recruit_nummbers__error" style="color:red">{{ $errors->first('post.recruit_nummbers') }}</p>
            </div>
            
            <div class="recruit_part">
                <h4>求人パート</h4>
                <select name="post[recruit_part]"class="rounded-2" >{{ old('post.recruit_part') }}
                <option ></option>
                <option >ボーカル</option>
                <option >ギター</option>
                <option >ベース</option>
                <option >ピアノ・キーボード</option>
                <option >ドラム</option>
                <option >管楽器</option>
                <option >弦楽器</option>
                <option >パーカッション</option>
                <option >作詞・作曲・編集者</option>
                <option >DJ</option>
                <option >その他</option>
                </select>
                <p class="recruit_part__error" style="color:red">{{ $errors->first('post.recruit_part') }}</p>
            </div>
            
            <div class="genre">
                <h4>性別</h4>
                <input type='radio' name="post[genre]" value={{old('post.genre','男性')}}>男性
                <input type='radio' name="post[genre]" value={{old('post.genre','女性')}}>女性
                <p class="genre__error" style="color:red">{{ $errors->first('post.genre') }}</p>
            </div>
            
            
            <input type="submit" class="btn btn-info mb-3" value="更新"/>
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

