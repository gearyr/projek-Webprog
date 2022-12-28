<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function viewRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);

        return redirect('login');
    }

    public function viewAdmin()
    {
        return view('admin');
    }

    public function viewUser()
    {
        return view('user');
    }

    public function viewGuest()
    {
        return view('guest');
    }

    public function viewHome()
    {
        return view('home');
    }

    public function viewLogin()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $info = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if($request->remember){
            Cookie::queue('emailcookie',$request->email,120);
            Cookie::queue('passwordcookie',$request->password,120);
        }

        if(Auth::attempt($info,true)){
            Session::put('mysession',$info);
            if(Auth::user()->role == 'admin'){
                return redirect('admin');
            }
            if(Auth::user()->role == 'user'){
                return redirect('user');
            }
            return redirect('guest');
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'Your Email or Password is wrong. Please try again.');

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
