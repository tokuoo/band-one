<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use APP\Http\controllers;

class PostController extends Controller

{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(10)]);
        $posts = Post::with('user')->with('likes')->latest();
        dump($posts);
        return view('posts.index', compact('posts'))->with([]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->title = $input["title"];
        $post->body = $input["body"];
        $post->place = $input["place"];
        $post->recruit_nummbers = $input["recruit_nummbers"];
        $post->recruit_part = $input["recruit_part"];
        $post->genre = $input["genre"];
        $post->save();
        return redirect('/posts/'. $post->id);
        
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
    public function user()
    {
    return $this->belongsTo('User');
    }
}