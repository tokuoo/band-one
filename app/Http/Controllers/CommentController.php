<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;


class CommentController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function create(Post $post)
    {
        return view('comment/create')->with(['post'=>$post]);
    }
    
    public function store(Request $request, Post $post ,Comment $comment)
    {
        $input = $request['comment'];
        $comment->title = $input["title"];
        $comment->body = $input["body"];
        $comment->user_id = $request->user()->id;
        $comment->post_id = $post->id;
        $comment->save();
        return redirect('/posts/'. $post->id);
        
    }
    
    public function edit(Comment $comment)
    {
        return view('comment/edit')->with(['comment' => $comment]);
    }
    
    public function update(Request $request ,Comment $comment)
    {
        $post = $comment->post;
        $input_comment = $request['comment'];
        $comment->fill($input_comment)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Comment $comment)
    {
        $post = $comment->post;
        $comment->delete();
        return redirect('/posts/' . $post->id);
    }
}
