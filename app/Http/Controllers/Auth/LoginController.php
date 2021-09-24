<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/

    public function create_login()
    {
        return view('auth.login');
    }

    public function login_admin(Request $req)
    {
        $email = verify_input($req->input('email'));
        $password = verify_input($req->input('password'));
        $EMAIL_REGEX = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

        if (!isset($email) || empty($email) || !isset($password) || empty($password)) {
            return back()->with('error_login', 'Veillez remplir tous les champs');
        }
        if (!preg_match($EMAIL_REGEX, $email)) {
            return back()->with('error_login', 'Cette adresse email est invalide');
        }
        $infos_admin = DB::table('users')
            ->where('EMAIL', $email)
            ->where('IS_ADMIN', 1)
            ->first();
        if ($infos_admin) {
            if (Hash::check($password, $infos_admin->PASSWORD)) {
                session_start();
                session::put('id_admin', $infos_admin->ID_USER);
                session::put('id_role', $infos_admin->ID_ROLE);
                return redirect('parametre');
            } else {
                return back()->with('error_login', 'Email ou mot de passe incorrect ');
            }
        } else {
            return back()->with('error_login', 'Email ou mot de passe incorrect');
        }
    }


    public function logout(Request $req)
    {
        if ($req->session()->forget('id_admin')) {
            return redirect('connexion-admin');
        } else {
            return back();
        }
    }
}
