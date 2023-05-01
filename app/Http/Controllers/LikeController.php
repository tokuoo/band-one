<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use Auth;

class LikeController extends Controller
{
    public function like(Post $post){
        $like = new Like();
        $like->post_id = $post->id;
        $like->user_id = Auth::id();
        $like->save();
        
        return back();
    }
    
    public function unlike(Post $post) {
        $user = Auth::id();
        $like = Like::where('post_id', $post->id)->where('user_id', $user)->first();
        $like->delete();
        
        return back();
    }
}
