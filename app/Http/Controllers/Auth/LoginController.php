<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/usuario';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(){
        $credentials = $this->validate(request(), [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

        //return $credentials;
        #Verificamos si las credenciales son correctas
        if(Auth::attempt($credentials)){

            return redirect()->route('dashboard');
        }
        return back()
            ->withErrors([$this->username()=>trans('auth.failed')])
            ->withInput(request([$this->username()]));
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function username(){
        return 'dni';
    }
}
