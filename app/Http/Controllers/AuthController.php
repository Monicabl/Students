<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        // Regresa true cuando tu sesion esta abierta
        if(Auth::check()) {
        return redirect('students');
        } else{
            return view('auth.login');
        }
    
    }
    

    public function authenticate(Request $request)
        {
            $credentials = $request->only('email', 'password');        

            if (Auth::attempt($credentials)) {
            //  if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->intended('students');
            } else {
                return redirect()->back();
            }
            
        }
        public function logout()
        {
            Auth::logout();
            return redirect('login');
        }
}