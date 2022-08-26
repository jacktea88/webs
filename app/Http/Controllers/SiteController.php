<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function renderBlogPage(){
        // return view('blog');
        $posts = Post::where('status','published')->orderBy('created_at','desc')->get();
        // return $posts;
        for ($i=1; $i<5; $i++){

            $counts[$i] = Post::where('status','published')->where('category_id',$i)->count();
        }
        // return $counts;
        return view('blog',compact('posts','counts'));

    }

    public function renderPostPage(){
        return view('post');
    }
}
