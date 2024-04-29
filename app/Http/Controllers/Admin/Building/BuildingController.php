<?php

namespace App\Http\Controllers\Admin\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\BuildingRequest;
use App\Models\Building;

use App\Traits\FileManagerTrait;
use Illuminate\Http\Request;

class BuildingController extends Controller
{ 
    use FileManagerTrait;
    
    public function index()
    {
        try
        {
            $buildings = Building::get();
            return view('dashboard.buildings.index',compact('buildings'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $building= Building::findOrFail($id);
        try
        {
            if(isset($building))
            {
                return view('dashboard.buildings.edit',compact('building'));
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
        // dd($request->building_name);
        try
        {
            Building::create([
                'name'=>$request->building_name
            ] );
            
            // $building = new Building;
            
            // $building->name = $request->building_name;
            // $building->save();
            return redirect()->route('buildings.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' ,$ex );
        }
    }

    public function update(BuildingRequest $request,$id)
    {
        $building = Building::findOrFail($id);
        try
        {
            if(isset($building))
            {
                $building->update([
                    'name' => $request->building_name
                ]);
                return redirect()->route('buildings.index')->with('success' ,'تم التعديل بنجاح');
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
        $building= Building::findOrFail($id);
        try
        {
            if(isset($building))
            {
                $building->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
    

}
