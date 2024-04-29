<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\AdminRequest;

class AdminController extends Controller
{
    use FileManagerTrait;

    public function index()
    {
        try
        {
            $admins = Admin::whereHas('role', function($q){
                    $q->where('name', 'teacher');
                }
            )->get();
            return view('dashboard.admins.index',compact('admins'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , __('lang.not_found'));
        }
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        try
        {
            if(isset($admin))
            {
                return view('dashboard.admins.edit',compact('admin'));
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

    public function store(AdminRequest $request)
    {
        try
        {
            $admin = new Admin;

            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);
            $admin->role_id = 2;
            $admin->image = $this->upload('image','admins');
            $admin->save();
            return redirect()->route('admins.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(AdminRequest $request,$id)
    {
        $admin = Admin::findOrFail($id);
        
        try
        {
            if(isset($admin))
            {
                // dd($request->password);
                $admin->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password ? bcrypt($request->password) : $admin->password,
                    'image' => $request->image ?  $this->updateFile('image','admins',$admin->image) : $admin->image,
                ]);
                
                return redirect()->route('admins.index')->with('success' ,'تم التعديل بنجاح');
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
        try
        {
            $admin = Admin::find($id);
            if(isset($admin))
            {
                $admin->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
