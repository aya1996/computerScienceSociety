<?php

namespace App\Http\Controllers\Admin\Info;

use App\Models\Info;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Info\InfoRequest;
use App\Http\Requests\College\CollegeRequest;

class InfoController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $infos = Info::get();
            return view('dashboard.infos.index',compact('infos'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $info = Info::findOrFail($id);
        try
        {
            if(isset($info))
            {
                return view('dashboard.infos.edit',compact('info'));
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

    public function store(InfoRequest $request)
    {
        try
        {
            $info = new Info;
            $info->address = $request->address;
            $info->phone = $request->phone;
            $info->email = $request->email;
            $info->facebook = $request->facebook;
            $info->twitter = $request->twitter;
            $info->youtube = $request->youtube;
            $info->save();
            return redirect()->route('infos.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(InfoRequest $request,$id)
    {
        $info = Info::findOrFail($id);
        try
        {
            if(isset($info))
            {
                $info->update([
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'youtube' => $request->youtube,
                ]);
                return redirect()->route('infos.index')->with('success' ,'تم التعديل بنجاح');
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
        $info = Info::findOrFail($id);
        try
        {
            if(isset($info))
            {
                $info->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
