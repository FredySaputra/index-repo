<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //  
    public function index()
    {
        return view('login.login', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }


    public function authenticate(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        if (auth::guard('admin')->attempt(['nim' => $request->nim, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');

    }
}
