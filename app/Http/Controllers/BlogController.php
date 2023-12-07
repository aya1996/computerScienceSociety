<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::get();
        return view('site.blogs.index',compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $related_blogs = Blog::where('id','!=',$id)->get();
        return view('site.blogs.show',compact('blog','related_blogs'));
    }
}
