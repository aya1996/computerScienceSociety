<?php

namespace App\Http\Controllers\Admin\Schedule;

use Carbon\Carbon;
use App\Models\Hall;
use App\Models\College;
use App\Models\Course;
use App\Models\Semester;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Hall\HallRequest;
use App\Http\Requests\College\CollegeRequest;
use App\Http\Requests\Schedule\ScheduleRequest;

class ScheduleController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $halls = Hall::get();
            $colleges = College::get();
            $semesters = Semester::get();
            $schedules = Schedule::where('teacher_id',auth()->id())->get();
            $days = ['الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس'];
            return view('dashboard.schedules.index',compact('halls','colleges','schedules','days','semesters'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        try
        {
            if(isset($schedule) && $schedule->teacher_id == auth()->id())
            {
                $colleges = College::get();
                $halls = Hall::where('college_id',$schedule->college_id)->get();
                $semesters = Semester::get();
                $courses = Course::where('college_id',$schedule->college_id)->get();
                $days = ['الأحد','الإثنين','الثلاثاء','الأربعاء','الخميس'];
                return view('dashboard.schedules.edit',compact('schedule','colleges','courses','days','halls','semesters'));
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

    public function store(ScheduleRequest $request)
    {
        try
        {
            $schedules = Schedule::get();

            if($schedules->count() > 0)
            {
                foreach($schedules as $item)
                {
                    if($item->college_id == $request->college_id && $item->hall_id == $request->hall_id
                    && $item->semester_id == $request->semester_id
                    && $item->day == $request->day)
                    {
                        $startTime = Carbon::createFromFormat('H:i', $request->time_from);
                        $endTime = Carbon::createFromFormat('H:i', $request->time_to);
                        $scheduleStartTime = Carbon::createFromFormat('H:i', $item->time_from);
                        $schedulEndTime = Carbon::createFromFormat('H:i', $item->time_to);

                        $check = $startTime->between($scheduleStartTime, $schedulEndTime, true);
                        $check_end = $endTime->between($scheduleStartTime, $schedulEndTime, true);

                        if($check || $check_end)
                        {
                            return back()->with('failed' , 'لا يمكن الإضافة  القاعه شاغره في الوقت المطلوب');

                        }
                        else{
                            continue;
                        }
                    }
                    continue;
                }
            }

            $schedule = new Schedule;
            $schedule->college_id = $request->college_id;
            $schedule->hall_id = $request->hall_id;
            $schedule->course_id = $request->course_id;
            $schedule->semester_id = $request->semester_id;
            $schedule->teacher_id = auth()->id();
            $schedule->day = $request->day;
            $schedule->time_from = $request->time_from;
            $schedule->time_to = $request->time_to;
            $schedule->save();
            return redirect()->route('schedules.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(ScheduleRequest $request,$id)
    {
        $schedule = Schedule::findOrFail($id);
        try
        {
            if(isset($schedule))
            {
                $schedules = Schedule::where('id','!=',$schedule->id)->get();

                if($schedules->count() > 0)
                {
                    foreach($schedules as $item)
                    {
                        if($item->college_id == $request->college_id && $item->hall_id == $request->hall_id
                        && $item->semester_id == $request->semester_id
                        && $item->day == $request->day)
                        {
                            $startTime = Carbon::createFromFormat('H:i', $request->time_from);
                            $endTime = Carbon::createFromFormat('H:i', $request->time_to);
                            $scheduleStartTime = Carbon::createFromFormat('H:i', $item->time_from);
                            $schedulEndTime = Carbon::createFromFormat('H:i', $item->time_to);

                            $check = $startTime->between($scheduleStartTime, $schedulEndTime, true);
                            $check_end = $endTime->between($scheduleStartTime, $schedulEndTime, true);

                            if($check || $check_end)
                            {
                                return back()->with('failed' , 'لا يمكن الإضافة  القاعه شاغره في الوقت المطلوب');

                            }
                            else{
                                continue;
                            }
                        }
                        continue;
                    }
                }


                $schedule->update([
                    'college_id' => $request->college_id,
                    'hall_id' => $request->hall_id,
                    'course_id' => $request->course_id,
                    'semester_id' => $request->semester_id,
                    'teacher_id' => auth()->id(),
                    'day' => $request->day,
                    'time_from' => $request->time_from,
                    'time_to' => $request->time_to,
                ]);
                return redirect()->route('schedules.index')->with('success' ,'تم التعديل بنجاح');
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
        $schedule = Schedule::findOrFail($id);
        try
        {
            if(isset($schedule))
            {
                $schedule->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function getHalls(Request $request)
    {
        $college_id = $request->college_id;
        if($college_id != NULL)
        {
            $halls = Hall::where('college_id',$college_id)->get();
            $courses = Course::where('college_id',$college_id)->get();
        }
        else
        {
            $halls = '';
            $courses = '';
        }
        return response()->json(['halls' => $halls,'courses' => $courses]);
    }
}
