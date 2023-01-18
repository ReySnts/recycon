<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register_page(){
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

        [
            'repassword.same' => "Password don't match"
        ]

        );
        $validated['password'] = Hash::make($validated['password']);
        DB::table('users')->insert([
            [
                'username' => $validated['username'],
                'email_address' => $validated['email_address'],
                'password' => $validated['password'],
                'is_admin' => false
            ]
        ]);

        return redirect(route('login'))->with('success', 'Register Success');
    }

    public function login_page(){
        return view('login');
    }
    public function login(Request $req){
        $credentials = $req->validate([
            'email' => ['email:dns', 'required'],
            'password' => ['required'],
        ]);

        $remember_me = $req->has('remember_me') ? true : false;
        if(Auth::attempt($credentials,$remember_me)){
            $req->session()->regenerate();
            return redirect()->intended(route('main'));
        }
        return back()->with('loginError', 'Login Failed!');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
