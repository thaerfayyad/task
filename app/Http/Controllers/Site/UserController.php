<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_sign_in()
    {
        return view('site.auth.signin');
    }
    protected function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect()->route('web.home');
        }

        return redirect()->back()->with(['error' => 'incorrect information ']);
    }

    public function get_sign_up()
    {
        return view('site.auth.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sign_up(Request $request)

    {
        $request->validate([
            'userName' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = new User();
        $user ->name = $request->input('userName');
        $user ->email = $request-> input('email');;
        $user ->password = bcrypt($request->password);
        $user ->save();
        $remember_me = $request->has('remember_me') ? true : false;


        if (auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect()->route('web.home');
        }

        return redirect()->back()->with(['error' => 'incorrect information ']);
    }

    public function log_out(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('web.home');
    }


}
