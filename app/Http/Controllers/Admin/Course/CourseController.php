<?php

namespace App\Http\Controllers\Admin\Course;

use App\Models\Course;
use App\Models\College;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CourseRequest;
use App\Http\Requests\College\CollegeRequest;

class CourseController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $courses = Course::get();
            $colleges = College::get();
            return view('dashboard.courses.index',compact('courses','colleges'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        try
        {
            if(isset($course))
            {
                $colleges = College::get();
                return view('dashboard.courses.edit',compact('course','colleges'));
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

    public function store(CourseRequest $request)
    {
        try
        {
            $course = new Course;
            $course->name = $request->name;
            $course->image = $this->upload('image','courses');
            $course->college_id = $request->college_id;
            $course->save();
            return redirect()->route('courses.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(CourseRequest $request,$id)
    {
        $course = Course::findOrFail($id);
        try
        {
            if(isset($course))
            {
                $course->update([
                    'name' => $request->name,
                    'college_id' => $request->college_id,
                    'image' => $request->image ?  $this->updateFile('image','courses',$course->image) : $course->image,
                ]);
                return redirect()->route('courses.index')->with('success' ,'تم التعديل بنجاح');
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
        $course = Course::findOrFail($id);
        try
        {
            if(isset($course))
            {
                $course->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
