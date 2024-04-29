<?php

namespace App\Http\Controllers\Admin\Semester;

use App\Models\Semester;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Semester\SemesterRequest;

class SemesterController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $semesters = Semester::get();
            return view('dashboard.semesters.index',compact('semesters'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $semester = Semester::findOrFail($id);
        try
        {
            if(isset($semester))
            {
                return view('dashboard.semesters.edit',compact('semester'));
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

    public function store(Request $request)
    {
        try
        {
            $semester = new Semester;
            $semester->name = $request->name;
            $semester->save();
            return redirect()->route('semesters.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(Request $request,$id)
    {
        $semester = Semester::findOrFail($id);
        try
        {
            if(isset($semester))
            {
                $semester->update([
                    'name' => $request->name
                ]);
                return redirect()->route('semesters.index')->with('success' ,'تم التعديل بنجاح');
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
        $semester = Semester::findOrFail($id);
        try
        {
            if(isset($semester))
            {
                $semester->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
