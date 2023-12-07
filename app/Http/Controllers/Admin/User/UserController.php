<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;

class UserController extends Controller
{
    use FileManagerTrait;
    public function index()
    {
        try
        {
            $users = User::get();
            return view('dashboard.users.index',compact('users'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        try
        {
            if(isset($user))
            {
                return view('dashboard.users.edit',compact('user'));
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

    public function store(UserRequest $request)
    {
        try
        {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->image = $this->upload('image','users');
            $user->save();
            return redirect()->route('users.index')->with('success' , 'تم الإضافة بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function update(UserRequest $request,$id)
    {
        $user = User::findOrFail($id);
        try
        {
            if(isset($user))
            {
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password ? bcrypt($request->password) : $user->password,
                    'image' => $request->image ?  $this->updateFile('image','users',$user->image) : $user->image,
                ]);
                return redirect()->route('users.index')->with('success' ,'تم التعديل بنجاح');
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
            $user = User::find($id);
            if(isset($user))
            {
                $user->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }
}
