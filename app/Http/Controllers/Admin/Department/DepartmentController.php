<?php

namespace App\Http\Controllers\Admin\Department;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Traits\FileManagerTrait;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $departments = Department::get();
            return view('dashboard.departments.index',compact('departments'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $department= Department::findOrFail($id);
        try
        {
            if(isset($department))
            {
                return view('dashboard.departments.edit',compact('department'));
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
            $department = new Department();
            $department->name = $request->name;
            $department->save();
            return redirect()->route('departments.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(Request $request,$id)
    {
        $department = Department::findOrFail($id);
        try
        {
            if(isset($department))
            {
                $department->update([
                    'name' => $request->name
                ]);
                return redirect()->route('departments.index')->with('success' ,'تم التعديل بنجاح');
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
        $department= Department::findOrFail($id);
        try
        {
            if(isset($department))
            {
                $department->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
