<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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



    protected function authenticated()
    {
        $this->add_bonus();
        if ( Auth::user() &&  Auth::user()->user_role == 'admin') {
            return redirect()->route('admin-dashboard');
        }

        return redirect()->route('user.user_dashboard');
    }
//    protected $redirectTo = RouteServiceProvider::HOME;
//    protected function redirectTo()
//    {
//        return $this->add_bonus();
//        return RouteServiceProvider::HOME;
//    }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
