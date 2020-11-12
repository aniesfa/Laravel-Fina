<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
    //protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo()
    {
        $for = [
            'Administrator' => 'manage',
            'User' => 'home',
        ];
        return $this->redirectTo = route($for[auth()->user()->roles]);
    }
<<<<<<< HEAD
=======
=======
    protected $redirectTo = RouteServiceProvider::HOME;

>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
>>>>>>> 3365f423b9611a4e007e66a73c6179538db30b6c
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
