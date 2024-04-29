<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use FileManagerTrait;

    public function index()
    {
        return view('site.users.index');
    }

    public function update(Request $request,$id)
    {
        $user = User::findOrFail(auth()->id());
        $user->update([
            'national_id' => $request->national_id,
            'name' => $request->name,
            'email' => $request->email,
            'image' => $request->image ?  $this->updateFile('image','users',$user->image) : $user->image,
        ]);
        return redirect()->back()->with('success' ,'تم التعديل بنجاح');
    }

    public function changePassword(Request $request)
    {
        $user = User::findOrFail(auth()->id());
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with('failed' ,'الرقم السري الحالي غير صحيح');
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        $user->update([
            'password' => bcrypt($request->get('new-password')),
        ]);
        return redirect()->back()->with('success' ,'تم التعديل بنجاح');
    }
}
