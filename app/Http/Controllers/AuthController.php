<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function register_page()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'min:3'],
            'email_address' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:6'],
            'repassword' => ['same:password']
        ],

        );
        $new_user = new users();
        $new_user::insert([
            [
                'username' => $validated['username'],
                'email_address' => $validated['email_address'],
                'password' => $validated['password'],
                'is_admin' => false
            ]
        ]);
        $new_user->save();
        return redirect()->route('home_route');
    }

    public function login_page()
    {
        return view('login');
    }


    public function login(Request $request){

        $username = $request->username;
        $password = $request->password;
        $remember = $request->remember;

        $login = users::where('username', '=', $username)->where('password', '=', $password)->first();

        if($login){
            session
            ([
                'username' => $login->username,
                'password' => $login->password
            ]);

            if($remember){
                Cookie::queue('cookieEmail', $username, 60*365);
                Cookie::queue('cookiePass', $password, 60*365);
            }

            return redirect()->route('home_route');
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home_route');
    }
}
