<?php

namespace App\Http\Controllers\Admin\OfficeHour;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfficeHourRequest;
use App\Models\OfficeHour;
use App\Traits\FileManagerTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OfficeHourController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try {

            $officeHours = OfficeHour::where('teacher_id', auth()->id())->get();
            $days = ['الأحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس'];

            return view('dashboard.officeHours.index', compact('officeHours', 'days'));
        } catch (\Exception $ex) {
            return back()->with('failed', 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $officeHour = OfficeHour::findOrFail($id);
        try {
            if (isset($officeHour)) {
                $days = ['الأحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس'];

                return view('dashboard.officeHours.edit', compact('officeHour', 'days'));
            } else {
                return back()->with('failed', 'هناك خطأ ما فضلا المحاولة لاحقا');
            }
        } catch (\Exception $ex) {
            return back()->with('failed', 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function store(OfficeHourRequest $request)
    {

        try {
            $time_from = Carbon::createFromFormat('H:i', $request->time_from);
            $time_to = Carbon::createFromFormat('H:i', $request->time_to);
            $officeHour = new OfficeHour();
            $officeHour->day = $request->day;
            $officeHour->time_from = $time_from;
            $officeHour->time_to = $time_to;
            $officeHour->teacher_id = auth()->id();
            $officeHour->save();
            return redirect()->route('officeHours.index')->with('success', 'تم الإضافة بنجاح');
        } catch (\Exception $ex) {
            return back()->with('failed', 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(OfficeHourRequest $request, $id)
    {
        $officeHour = OfficeHour::findOrFail($id);
   //  dd($request->day,$request->time_from,$request->time_to);
        try {

            if (isset($officeHour)) {
                if ($officeHour->count() > 0) {
                    foreach ($officeHour as $item) {
                        if ($item->time_from == $request->time_from && $item->time_to == $request->time_to && $item->day == $request->day) {
                            $startTime = Carbon::createFromFormat('H:i', $request->time_from);
                            $endTime = Carbon::createFromFormat('H:i', $request->time_to);
                            $scheduleStartTime = Carbon::createFromFormat('H:i', $item->time_from);
                            $schedulEndTime = Carbon::createFromFormat('H:i', $item->time_to);

                            $check = $startTime->between($scheduleStartTime, $schedulEndTime, true);
                            $check_end = $endTime->between($scheduleStartTime, $schedulEndTime, true);

                            if ($check || $check_end) {
                                return back()->with('failed', 'لا يمكن الإضافة  القاعه شاغره في الوقت المطلوب');
                            } else {
                                continue;
                            }
                        }
                        continue;
                    }
                    //dd($officeHours);
                    $officeHour->update([
                        'day' => $request->day,
                        'time_from' => $request->time_from,
                        'time_to' =>  $request->time_to,
                        'teacher_id' => auth()->id()

                    ]);
                    return redirect()->route('officeHours.index')->with('success', 'تم التعديل بنجاح');
                } else {
                    return back()->with('failed', 'هناك خطأ ما فضلا المحاولة لاحقا');
                }
            }
          
        } catch (\Exception $ex) {
            return back()->withErrors('failed', $ex);
        }
    }


    public function destroy($id)
    {
        $officeHour = OfficeHour::findOrFail($id);
        try {
            if (isset($officeHour)) {
                $officeHour->delete();
                return back()->with('success', 'تم الحذف بنجاح');
            }
        } catch (\Exception $ex) {
            return back()->with('failed', 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
