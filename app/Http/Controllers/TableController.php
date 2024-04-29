<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Semester;
use App\Models\Admin;
use App\Models\Building;
use App\Models\Table;
use App\Models\Course;
use App\Models\Department as Department;
use App\Models\Hall;
use App\Models\Level;
use App\Models\OfficeHour;
use App\Models\Schedule;

use Illuminate\Http\Request;

class TableController extends Controller
{

    public function index()
    {

        $buildings = Building::get();
        $levels = Level::get();
        $halls = Hall::get();
        $teachers = Admin::where('role_id', 2)->get();
        $officeHours = OfficeHour::get();
        return view('site.tables.index', compact('buildings', 'levels', 'halls', 'teachers', 'officeHours'));
    }

    public function store(Request $request)
    {
        // dd($request );
        $this->validate($request, [
            'level_id' => 'required|numeric|min:1',
            'level_id' => 'required|numeric|min:1',
            'hall_id' => 'required|numeric|min:1',
            'officeHours_id' => 'required|numeric|min:1',
            'teacher_id' => 'required|numeric|min:1',
            'accepted' => 'boolean|default:0',

        ]);
    //     dd($request->level_id,
    //     $request->level_id,
    //     $request->hall_id,
    //    $request->officeHours_id,
    //    $request->teacher_id,
    //    auth()->id());
        try {
            $student_tables = Table::where('user_id', auth()->id())->get();
            if ($student_tables->count() > 0) {
                foreach ($student_tables as $item) {
                    if (
                        $item->teacher_id == $request->teacher_id && $item->officeHours_id == $request->officeHours_id  

                    ) {
                        return back()->with('failed', 'تم اختيار الميعاد مسبقا ');
                    }
                }
            }
            // Table::create([
            //     'level_id' => $request->level_id,
            //     'level_id' => $request->level_id,
            //     'hall_id' => $request->hall_id,
            //     'OfficeHours_id' => $request->OfficeHours_id,
            //     'teacher_id' => $request->teacher_id,
            //     'user_id' => auth()->id(),
            // ]);
         
            
                $table = new Table;
                $table->building_id = $request->building_id;
                $table->level_id = $request->level_id;
                $table->hall_id = $request->hall_id;
                $table->officeHours_id = $request->officeHours_id;
                $table->teacher_id = $request->teacher_id;
                $table->user_id = auth()->id();
           
                $table->save();


                return back()->with('success', 'تم الإضافة بنجاح');
            
        } catch (\Exception $ex) {
            // return back()->with('failed', 'هناك خطأ فضلا المحاولة لاحقا');
            return back()->withErrors($ex);

    }
}


    public function getLevels(Request $request)
    {
        $building_id = $request->building_id;
        if ($building_id != NULL) {
            $levels = Level::where('building_id', $building_id)->get();
            //    $departments = Department::whereIn('id',$schedules->pluck('department_id')->toArray())->get();
        } else {
            $levels = '';
        }
        return response()->json(['levels' => $levels]);
    }


    public function getHalls(Request $request)
    {
        $building_id = $request->Building_id;
        $level_id = $request->level_id;
        if ($level_id != NULL) {
            $halls = Hall::where('level_id', $level_id, 'building_id', $building_id)->get();
            //    $departments = Department::whereIn('id',$schedules->pluck('department_id')->toArray())->get();

        } else {
            $halls = '';
        }
        return response()->json(['halls' => $halls]);
    }
    public function getOfficeHours(Request $request)
    {
        $teacher_id = $request->teacher_id;
        if ($teacher_id != NULL) {
            $officeHours = OfficeHour::where('teacher_id', $teacher_id)->get();
            //  $teachers = Admin::whereIn('id', $schedules);
        } else {
            $officeHours = '';
        }
        return response()->json(['officeHours' => $officeHours]);
    }
    public function getTable()
    {
        $student_courses = Table::where('user_id', auth()->id())->get();
        $schedules = Schedule::whereIn('course_id', $student_courses->pluck('course_id')->toArray())
            ->whereIn('teacher_id', $student_courses->pluck('teacher_id')->toArray())
            ->whereIn('hall_id', $student_courses->pluck('hall_id')->toArray())->get();
        return view('site.tables.my_table', compact('schedules'));
    }

    public function getAppointment()
    {
        $student_appointments = Table::where('user_id', auth()->id())->get();
        // $appointments = Scheule::whereIn('course_id', $student_appointments->pluck('course_id')->toArray())
        //     ->whereIn('teacher_id', $student_appointments->pluck('teacher_id')->toArray())
        //     ->whereIn('level_id', $student_appointments->pluck('level_id')->toArray())->get();
        return view('site.tables.my_appointments', compact('student_appointments'));
    }
    public function deleteSchedule($id)
    {
        $schedule = Schedule::findOrFail($id);
        try {
            $table = Table::where([
                'user_id' => auth()->id(),
                'department_id' => $schedule->department_id,
                'course_id' => $schedule->course_id,
                'hall_id' => $schedule->level_id,
                'teacher_id' => $schedule->teacher_id,
            ])->first();


            if (isset($table)) {
                $table->delete();
                return back()->with('success', 'تم الحذف بنجاح');
            } else {

                return back()->with('failed', 'هناك خطأ فضلا المحاولة لاحقا');
            }
        } catch (\Exception $ex) {
            return back()->with('failed', 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }

    public function deleteAppointment($id)
    {
        $appointment = Table::findOrFail($id);
        try {

            if (isset($appointment)) {
                $appointment->delete();
                return back()->with('success', 'تم الحذف بنجاح');
            } else {

                return back()->with('failed', 'هناك خطأ فضلا المحاولة لاحقا');
            }
        } catch (\Exception $ex) {
            return back()->with('failed', 'هناك خطأ فضلا المحاولة لاحقا');
        }
    }
}
