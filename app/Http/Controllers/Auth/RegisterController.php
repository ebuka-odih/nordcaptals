<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\NewUser;
use App\Notifications\ReferralBonus;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param Request $request
     * @param $user
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function registered(Request $request, $user)
    {
        if ($user->referrer !== null) {
            Notification::send($user->referrer, new ReferralBonus($user));
        }

        return redirect($this->redirectPath());
    }

    public function showRegistrationForm(Request $request)
    {
        if ($request->has('ref')) {
            session(['referrer' => $request->query('ref')]);
        }
        return view('auth.register');
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'unique:users', 'alpha_dash', 'min:3', 'max:30'],
//            'secret_question' => ['required', 'string', 'max:255'],
//            'answer' => ['required', 'string', 'max:255'],
//            'btc_wallet' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $referrer = User::whereUsername(session()->pull('referrer'))->first();

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username'  => $data['username'],
            'referred_by' => $data['referred_by'],
//            'btc_wallet' => $data['btc_wallet'],
            'referrer_id' => $referrer ? $referrer->id : null,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);




        event(new \App\Events\UserReferred(request()->cookie('ref'), $user));

        $admin = User::where('user_role', '=', 'admin')->first();
        if ($admin) {
            $admin->notify(new NewUser($user));
        }

        return $user;
    }



}
