<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Source\Tools\ConfiguracionInit;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Session::has('menu')) {
            Session::forget('menu');
        }
        if (Session::has('configinit')) {
            Session::forget('configinit');
        }
        $this->middleware('guest')->except('logout');
    }
}
