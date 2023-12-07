<?php

namespace App\Http\Controllers\Admin\College;

use App\Models\College;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\College\CollegeRequest;

class CollegeController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $colleges = College::get();
            return view('dashboard.colleges.index',compact('colleges'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $college = College::findOrFail($id);
        try
        {
            if(isset($college))
            {
                return view('dashboard.colleges.edit',compact('college'));
            }
            else
            {
                return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
            }
        }
        catch(Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function store(CollegeRequest $request)
    {
        try
        {
            $college = new College;
            $college->name = $request->name;
            $college->image = $this->upload('image','colleges');
            $college->save();
            return redirect()->route('colleges.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(CollegeRequest $request,$id)
    {
        $college = College::findOrFail($id);
        try
        {
            if(isset($college))
            {
                $college->update([
                    'name' => $request->name,
                    'image' => $request->image ?  $this->updateFile('image','colleges',$college->image) : $college->image,
                ]);
                return redirect()->route('colleges.index')->with('success' ,'تم التعديل بنجاح');
            }
            else
            {
                return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }


    public function destroy($id)
    {
        try
        {
            $college = College::find($id);
            if(isset($college))
            {
                $college->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
