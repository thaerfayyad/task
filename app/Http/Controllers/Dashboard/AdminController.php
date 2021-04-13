<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('dashboard.auth.login');
    }
    protected function login(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],

        ]);
        $remember_me = $request->has('remember') ? true : false;


        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with(['error' => 'incorrect information ']);
    }
    public function log_out(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.get.login');
    }

}
