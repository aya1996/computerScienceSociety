<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Models\Slider;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderRequest;

class SliderController extends Controller
{
    use FileManagerTrait;

    public function index()
    {
        try
        {
            $sliders = Slider::get();
            return view('dashboard.sliders.index',compact('sliders'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        try
        {
            if(isset($slider))
            {
                return view('dashboard.sliders.edit',compact('slider'));
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

    public function store(SliderRequest $request)
    {
        try
        {
            $slider = new Slider;
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->image = $this->upload('image','sliders');
            $slider->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }

    public function update(SliderRequest $request,$id)
    {
        try
        {
            $slider = Slider::find($id);
            if(isset($slider))
            {
                $slider->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'image' => $request->image ?  $this->updateFile('image','sliders',$slider->image) : $slider->image,
                ]);
                return redirect()->route('sliders.index')->with('success' , 'تم التحديث بنجاح');
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
        $slider = Slider::find($id);
        try
        {
            if(isset($slider))
            {
                $slider->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }
}
