<?php

namespace App\Http\Controllers\Admin\Level;

use App\Http\Controllers\Controller;
use App\Http\Requests\Level\LevelRequest;
use App\Models\Building;
use App\Models\Level;
use App\Traits\FileManagerTrait;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
        
            $levels = Level::get();
            $buildings= Building::get(); 
            return view('dashboard.levels.index',compact('levels','buildings'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $level = Level::findOrFail($id);
        try
        {
            if(isset($level))
            {
                ;
                $buildings= Building::get(); 
                return view('dashboard.levels.edit',compact('level','buildings'));
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

    public function store(LevelRequest $request)
    {
        try
        {
            $level = new Level();
            $level->name = $request->name;
            $level->building_id = $request->building_id;

            $level->save();
            return redirect()->route('levels.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(LevelRequest $request,$id)
    {
        $building = Level::findOrFail($id);
        try
        {
            if(isset($building))
            {
                $building->update([
                    'name' => $request->name,
                    'building_id'=> $request->building_id,
                   
                ]);
                return redirect()->route('levels.index')->with('success' ,'تم التعديل بنجاح');
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
        $level = Level::findOrFail($id);
        try
        {
            if(isset($level))
            {
                $level->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
