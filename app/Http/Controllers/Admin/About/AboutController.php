<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\About;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\About\AboutRequest;

class AboutController extends Controller
{
    use FileManagerTrait;

    public function index()
    {
        try
        {
            $abouts = About::get();
            return view('dashboard.abouts.index',compact('abouts'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $about = About::find($id);
        try
        {
            if(isset($about))
            {
                return view('dashboard.abouts.edit',compact('about'));
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

    public function store(AboutRequest $request)
    {
        try
        {
            $about = new About;
            $about->description = $request->description;
            $about->vision = $request->vision;
            $about->values = $request->values;
            $about->message = $request->message;
            $about->image = $this->upload('image','abouts');
            $about->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }

    public function update(AboutRequest $request,$id)
    {
        try
        {
            $about = About::find($id);
            if(isset($about))
            {
                $about->update([
                    'description' => $request->description,
                    'vision' => $request->vision,
                    'values' => $request->values,
                    'message' => $request->message,
                    'image' => $request->image ?  $this->updateFile('image','abouts',$about->image) : $about->image,
                ]);
                return redirect()->route('abouts.index')->with('success' , 'تم التحديث بنجاح');
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
        $about = About::find($id);
        try
        {
            if(isset($about))
            {
                $about->delete();
                return back()->with('success' , 'تم تاحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }
}
