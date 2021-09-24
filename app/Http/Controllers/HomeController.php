<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create_home_admin()
    {
        $id_admin = session::get('id_admin');
        if (!isset($id_admin) || empty($id_admin)) {
            return view('auth.login');
        } else {
            return view('admin.dashboard');
        }
    }

    public function create_home_user()
    {
        return view('home_page');
    }

    public function send_messgae(Request $req){
        $nom_internaute = verify_input($req->input('nom_internaute'));
        $prenom_internaute = verify_input($req->input('prenom_internaute'));
        $email_internaute = verify_input($req->input('email_internaute'));
        $phone_internaute = verify_input($req->input('phone_internaute'));
        $message_internaute = verify_input($req->input('message_internaute'));
        $EMAIL_REGEX = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        $data = array(
            "nom_internaute" =>$nom_internaute,
            "prenom_internaute" =>$prenom_internaute,
            "email_internaute" =>$email_internaute,
            "nom_internaute" =>$nom_internaute,
            "message_internaute" =>$message_internaute,
            "phone_internaute" =>$phone_internaute
        );

        if (!isset($nom_internaute) || empty($nom_internaute) || !isset($prenom_internaute) || empty($prenom_internaute)
        || !isset($email_internaute) || empty($email_internaute) || !isset($phone_internaute) || empty($phone_internaute)
        || !isset($message_internaute) || empty($message_internaute)) {
            return back()
                ->withInput()
                ->with('error_mail', 'Veillez remplir tous les champs afin d"envoyer votre mail');
        }
        if (!preg_match($EMAIL_REGEX, $email_internaute)) {
            return back()->with('error_mail', 'Cette adresse email est invalide');
        }

        if(Mail::to('luciendidier237@gmail.com')->send(new contactMail($data))){
            return back()->with('success_mail', 'Votre mail a été envoyé avec success et est en cour de traitlement');
        }else{
            return back()->with('error_mail', "votre mail n'a pas pu etre envoyez");}
    }
}
