<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Models\Blog;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogRequest;

class BlogController extends Controller
{
    use FileManagerTrait;

    public function index()
    {
        try
        {
            $blogs = Blog::get();
            return view('dashboard.blogs.index',compact('blogs'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        try
        {
            if(isset($blog))
            {
                return view('dashboard.blogs.edit',compact('blog'));
            }
            else
            {
                return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
            }
        }
        catch(Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }

    public function store(BlogRequest $request)
    {
        try
        {
            $blog = new Blog;
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->image = $this->upload('image','blogs');
            $blog->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }

    public function update(BlogRequest $request,$id)
    {
        try
        {
            $blog = Blog::find($id);
            if(isset($blog))
            {
                $blog->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'image' => $request->image ?  $this->updateFile('image','blogs',$blog->image) : $blog->image,
                ]);
                return redirect()->route('blogs.index')->with('success' , 'تم التحديث بنجاح');
            }
            else
            {
                return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }


    public function destroy($id)
    {
        $blog = Blog::find($id);
        try
        {
            if(isset($blog))
            {
                $blog->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }
}
