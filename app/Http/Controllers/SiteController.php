<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function renderBlogPage(){
        // return view('blog');
        $posts = Post::where('status','published')->orderBy('created_at','desc')->get();
        // return $posts;
        $categoryCount=Category::count();
        // dd($count);
        for ($i=1; $i<$categoryCount; $i++){

            $postCounts[$i] = Post::where('status','published')->where('category_id',$i)->count();
        }
        // return $counts;
        return view('blog',compact('posts','postCounts'));

    }

    public function renderPostPage(){
        return view('post');
    }
}
