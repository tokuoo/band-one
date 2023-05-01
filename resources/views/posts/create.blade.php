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
        <form action="/posts" method="POST">
            
            
            @csrf
            <div class="title">
                <h4>見出し</h4>
                <input type="text" name="post[title]" placeholder="例：初心者大歓迎!!" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            
            
            <div class="body">
                <h4>概要</h4>
                <textarea name="post[body]" placeholder="例：関東地方で活動できる方募集してます！">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            
            <div class="place">
                <h4>活動地域</h4>
                <select name="post[place]" >{{ old('post.place') }}
                <option value=""></option>
                <option value="1">北海道</option>
                <option value="2">東北地方</option>
                <option value="3">関東地方</option>
                <option value="4">中部地方</option>
                <option value="5">近畿地方</option>
                <option value="6">中国地方</option>
                <option value="7">四国地方</option>
                <option value="8">九州地方</option>
                <option value="9">沖縄</option>
                
                </select>
                <p class="place__error" style="color:red">{{ $errors->first('post.place') }}</p>
            </div>
            
            <div class="recruit_nummbers">
                <h4>求人数</h4>
                <select name="post[recruit_nummbers]" >{{ old('post.recruit_nummbers') }}
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="9">10</option>
                <option value="9">11</option>
                <option value="9">12</option>
                
                
                </select>
                <p class="recruit_nummbers__error" style="color:red">{{ $errors->first('post.recruit_nummbers') }}</p>
            </div>
            
            <div class="recruit_part">
                <h4>求人パート</h4>
                <select name="post[recruit_part]" >{{ old('post.recruit_part') }}
                <option value=""></option>
                <option value="1">ボーカル</option>
                <option value="2">ギター</option>
                <option value="3">ベース</option>
                <option value="4">ピアノ・キーボード</option>
                <option value="5">ドラム</option>
                <option value="6">管楽器</option>
                <option value="7">弦楽器</option>
                <option value="8">パーカッション</option>
                <option value="9">作詞・作曲・編集者</option>
                <option value="10">DJ</option>
                <option value="11">その他</option>
                </select>
                
                <select name="post[recruit_part]" >{{ old('post.recruit_part') }}
                <option value=""></option>
                <option value="1">ボーカル</option>
                <option value="2">ギター</option>
                <option value="3">ベース</option>
                <option value="4">ピアノ・キーボード</option>
                <option value="5">ドラム</option>
                <option value="6">管楽器</option>
                <option value="7">弦楽器</option>
                <option value="8">パーカッション</option>
                <option value="9">作詞・作曲・編集者</option>
                <option value="10">DJ</option>
                <option value="11">その他</option>
                </select>
                
                
                <p class="recruit_part__error" style="color:red">{{ $errors->first('post.recruit_part') }}</p>
            </div>
            
            <div class="genre">
                <h4>性別</h4>
                <input type='radio' name="post[genre]" >{{ old('post.genre') }}男性</textarea>
                <input type='radio' name="post[genre]" >{{ old('post.genre') }}女性</textarea>
                <p class="genre__error" style="color:red">{{ $errors->first('post.genre') }}</p>
            </div>
            
            
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>
