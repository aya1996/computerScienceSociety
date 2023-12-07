<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\AdminAuth\AdminLogin;
use Illuminate\Contracts\Support\Renderable;

class AuthAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function showLoginForm()
    {
        return view('dashboard.auth.login');
    }
    public function login(AdminLogin $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->intended(route('admin.dashboard'));
        }
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            Auth::guard('admin')->logout();
            return redirect('admin/login')->withErrors(__('auth.un_active_account'));
        }
        else
        {
          return redirect()->back()->withErrors(__('auth.failed'));
        }

    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
