<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\About;
use App\Models\Admin;
use App\Models\Slider;
use App\Models\College;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $sliders = Slider::get();
        $about = About::first();
        $teachers = Admin::where(['role_id' => 2])->get();
        $blogs = Blog::get();
        $colleges = College::get();
        return view('welcome',compact('sliders','about','teachers','blogs','colleges'));
    }
}
