<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Semester;
use App\Models\Admin;
use App\Models\Table;
use App\Models\Course;
use App\Models\College;
use App\Models\Schedule;
use Illuminate\Http\Request;

class TableController extends Controller
{

    public function index()
    {
        $colleges = College::get();
        $semesters = Semester::get();
        return view('site.tables.index',compact('colleges','semesters'));
    }

    public function store(Request $request)
    {
        try
        {
            $student_tables = Table::where('user_id',auth()->id())->get();
            if($student_tables->count() > 0)
            {
                foreach($student_tables as $item)
                {
                    if($item->college_id == $request->college_id && $item->course_id == $request->course_id
                    && $item->semester_id == $request->semester_id
                    && $item->teacher_id == $request->teacher_id)
                    {
                        return back()->with('failed' , 'تم اختيار الكورس مسبقا ');
                    }
                }
            }

            $table = new Table;
            $table->college_id = $request->college_id;
            $table->course_id = $request->course_id;
            $table->semester_id = $request->semester_id;
            $table->teacher_id = $request->teacher_id;
            $table->user_id = auth()->id();
            $table->save();
            return back()->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }


    public function getColleges(Request $request)
    {
        $semester_id = $request->semester_id;
        if($semester_id != NULL)
        {
            $schedules = Schedule::where('semester_id',$semester_id)->get();
            $colleges = College::whereIn('id',$schedules->pluck('college_id')->toArray())->get();
        }
        else
        {
            $colleges = '';
        }
        return response()->json(['colleges' => $colleges]);
    }


    public function getCourses(Request $request)
    {
        $college_id = $request->college_id;
        if($college_id != NULL)
        {
            $courses = Course::where('college_id',$college_id)->get();
        }
        else
        {
            $courses = '';
        }
        return response()->json(['courses' => $courses]);
    }
    public function getTeachers(Request $request)
    {
        $course_id = $request->course_id;
        if($course_id != NULL)
        {
            $schedules = Schedule::where('course_id',$course_id)->get()->pluck('teacher_id')->toArray();
            $teachers = Admin::whereIn('id',$schedules)->get();
        }
        else
        {
            $teachers = '';
        }
        return response()->json(['teachers' => $teachers]);
    }
    public function getTable()
    {
        $student_courses = Table::where('user_id',auth()->id())->get();
        $schedules = Schedule::whereIn('course_id',$student_courses->pluck('course_id')->toArray())
        ->whereIn('teacher_id',$student_courses->pluck('teacher_id')->toArray())
        ->whereIn('semester_id',$student_courses->pluck('semester_id')->toArray())->get();
        return view('site.tables.my_table',compact('schedules'));
    }
    public function deleteSchedule($id)
    {
        $schedule = Schedule::findOrFail($id);
        try
        {
            $table = Table::where([
                'user_id' => auth()->id(),
                'college_id' => $schedule->college_id,
                'course_id' => $schedule->course_id,
                'semester_id' => $schedule->semester_id,
                'teacher_id' => $schedule->teacher_id,
            ])->first();


            if(isset($table))
            {
                $table->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
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
}
