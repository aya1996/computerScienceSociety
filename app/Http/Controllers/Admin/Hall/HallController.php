<?php

namespace App\Http\Controllers\Admin\Hall;

use App\Models\Hall;
use App\Models\College;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Hall\HallRequest;
use App\Http\Requests\College\CollegeRequest;
use App\Models\Building;
use App\Models\Course;
use App\Models\Level;

class HallController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $halls = Hall::get();
            $buildings = Building::get();
            $levels = Level::get();
            return view('dashboard.halls.index',compact('halls','buildings','levels'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $hall = Hall::findOrFail($id);
        try
        {
            if(isset($hall))
            {
                $buildings = Building::get();
                $levels = Level::get();
                return view('dashboard.halls.edit',compact('hall','buildings','levels'));
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

    public function store(HallRequest $request)
    {
        try
        {
            $hall = new Hall;
            $hall->name = $request->name;
            $hall->building_id = $request->building_id;
            $hall->level_id = $request->level_id;
            $hall->save();
            return redirect()->route('halls.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(HallRequest $request,$id)
    {
        $hall = Hall::findOrFail($id);
        try
        {
            if(isset($hall))
            {
                $hall->update([
                    'name' => $request->name,
                    'building_id' => $request->building_id,
                    'level_id' => $request->level_id,
                ]);
                return redirect()->route('halls.index')->with('success' ,'تم التعديل بنجاح');
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
        $hall = Hall::findOrFail($id);
        try
        {
            if(isset($hall))
            {
                $hall->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
