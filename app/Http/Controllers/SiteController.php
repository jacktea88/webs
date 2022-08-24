<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function renderBlogPage(){
        return view('blog');
    return view('welcome');

    }

    public function renderPostPage(){
        return view('post');
    }
}
