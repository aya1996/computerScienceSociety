<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use Illuminate\Routing\Controller;
use App\Http\Requests\User\AdminRequest;
use Illuminate\Contracts\Support\Renderable;

class AdminController extends Controller
{
    use FileManagerTrait;

    public function index()
    {
        return view('dashboard.admin');
    }

    public function edit($id)
    {
        try
        {
            $admin = Admin::find($id);
            if(isset($admin))
            {
                return view('dashboard.admin_users.edit',compact('admin'));
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

    public function update(AdminRequest $request,$id)
    {
        try
        {
            $admin = Admin::find($id);
            if(isset($admin))
            {
                $admin->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password ? bcrypt($request->password) : $admin->password,
                    'image' => $request->image ?  $this->updateFile('image','admins',$admin->image) : $admin->image,
                ]);

                return back()->with('success' ,'تم التعديل بنجاح');
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
}
