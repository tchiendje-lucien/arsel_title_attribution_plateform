<?php

namespace App\Http\Controllers;

use App\Mail\adminMail;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class adminController extends Controller
{
    public function __construct()
    {
    }
    public function create_admin()
    {
            $roles = DB::table('roles')->get();
            $dept = DB::table('departement')->get();
            $info_admin = "";
            $users = DB::table('users')
                ->where('IS_ADMIN', 1)
                ->join('departement', 'users.ID_DPT', '=', 'departement.ID_DPT')
                ->join('roles', 'users.ID_ROLE', '=', 'roles.ID_ROLE')
                ->get();
            //return DB::select('select * from users,  departement, roles where users.ID_DPT=departement.ID_DPT and users.ID_ROLE=roles.ID_ROLE');
            return view(
                'admin.gestion_admin',
                [
                    'roles' => $roles,
                    'departement' => $dept,
                    'users' => $users
                ]
            );
    }

    public function passgen($nbChar)
    {
        return substr(str_shuffle(
            'abcdefghijklmnopqrsé&-_$*#@tuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'
        ), 1, $nbChar);
    }

    public function store_admin(Request $req)
    {
        $name = verify_input($req->input('nom_admin'));
        $prenom = verify_input($req->input('prenom_admin'));
        $role_admin = verify_input($req->input('role_admin'));
        $dpt_admin = verify_input($req->input('dept_admin'));
        $email = verify_input($req->input('email_admin'));
        $password = self::passgen(10);
        $data = array(
                'name' => $name,
                'prenom' => $prenom,
                'role_admin' => $role_admin,
                'role_admin' => $role_admin,
                'email' => $email,
                'password' => $password,
        );
        $photo_admin = "default_admin_image.png";
        $EMAIL_REGEX = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

        if (!isset($name) || empty($name) || !isset($prenom) || empty($prenom) || !isset($email) || empty($email)) {
            return back()
                ->withInput()
                ->with('empty_input', 'Veillez remplir tous les champs');
        }
        if (!preg_match($EMAIL_REGEX, $email)) {
            return back()->with('email_error', 'Cette adresse email est invalide');
        }
        $select_user_name = DB::table('users')
            ->where('NOM', $name)
            ->where('PRENOM', $prenom)
            ->get();
        if ($select_user_name->count() > 0) {
            return back()->with('user_error', 'Ce nom et ce prenom sont deja utilisé');
        } else {
            $select_user_email = DB::table('users')
                ->where('EMAIL', $email)
                ->get();
            if ($select_user_email->count() > 0) {
                return back()->with('user_error', 'Cette adresse email est deja utilisé');
            } else {
                DB::insert(
                    'insert into users (ID_ROLE , ID_DPT, EMAIL, PASSWORD, NOM, PRENOM, TELEPHONE, IS_ADMIN, PHOTO_ADMIN, DATE_CREATE, DATE_UPDATE)
                     values(?,?,?,?,?,?,?,?,?,?,?)',
                    [
                        $role_admin, $dpt_admin, $email, Hash::make($password), $name,
                        $prenom, 0, 1, $photo_admin, Carbon::now(), Carbon::now()
                    ]
                );
                Mail::to('luciendidier237@gmail.com')->send(new adminMail($data));
                return back()->with('success_create', "L'administrateur a été ajouté avec success et son mot de passe est " . $password." et un mail lui a été envoyé");
            }
        }
    }

    public function find_admin($id_admin)
    {
        $roles = DB::table('roles')->get();
        $dept = DB::table('departement')->get();
        $infos_admin = DB::table('users')
            ->where('ID_USER', $id_admin)
            ->join('departement', 'users.ID_DPT', '=', 'departement.ID_DPT')
            ->join('roles', 'users.ID_ROLE', '=', 'roles.ID_ROLE')
            ->get();
        return view(
            'admin.edit_admin',
            [
                'roles' => $roles,
                'departement' => $dept,
                'infos_admin' => $infos_admin
            ]
        );
    }

    public function update_admin($id_admin, Request $req)
    {
        $name = verify_input($req->input('nom_admin'));
        $prenom = verify_input($req->input('prenom_admin'));
        $role_admin = verify_input($req->input('role_admin'));
        $dpt_admin = verify_input($req->input('dept_admin'));
        $email = verify_input($req->input('email_admin'));
        $PASSWORD_REGEX = '/^(?=.*\d).{5,25}$/';
        $EMAIL_REGEX = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

        if (!isset($name) || empty($name) || !isset($prenom) || empty($prenom) || !isset($email) || empty($email)) {
            return back()->with('empty_input', 'Veillez remplir tous les champs');
        }
        if (!preg_match($EMAIL_REGEX, $email)) {
            return back()->with('email_error', 'Cette adresse email est invalide');
        }
        if (DB::update(
            'update users, departement, roles set users.NOM = ?, users.PRENOM=?, EMAIL=?, users.ID_ROLE=?, users.ID_DPT=?, DATE_UPDATE=?
            where ID_USER=? and users.ID_ROLE=roles.ID_ROLE and users.ID_DPT=departement.ID_DPT',
            [
                $name,
                $prenom,
                $email,
                $role_admin,
                $dpt_admin,
                Carbon::now(),
                $id_admin

            ]
        )) {
            return back()->with('success_update', 'La modification a été effectué avec success');
        } else {
            return back()->with('error_update', 'La modification a échoué');
        }
    }


    public function delete_admin($id_admin)
    {
        if (DB::update(
            'update users set IS_ADMIN = ? where ID_USER = ?',
            [
                0,
                $id_admin
            ]
        )) {
            return redirect('gestion-administrateur');
        } else {
            return redirect('gestion-administrateur');
        }
    }

    public function activate_admin($id_admin)
    {
        if (DB::update(
            'update users set IS_ADMIN = ? where ID_USER = ?',
            [
                1,
                $id_admin
            ]
        )) {
            return back()->with('success_GesAdmin', "L'administrateur activer avec sussec");
        } else {
            return back()->with('fail_GesAdmin', "L'activation de l'administrateur a echouer");
        }
    }


    public function deactivate_admin($id_admin)
    {
        if (DB::update(
            'update users set IS_ADMIN = ? where ID_USER = ?',
            [
                0,
                $id_admin
            ]
        )) {
            return back()->with('success_GesAdmin', "L'administrateur deactiver avec sussec");
        } else {
            return back()->with('fail_GesAdmin', "La desactivation de l'administrateur a echouer");
        }
    }


    public function list_admin(Request $req)
    {
        $roles = DB::table('roles')->get();
        $dept = DB::table('departement')->get();
        $info_admin = "";
        $users = DB::table('users')
            ->join('departement', 'users.ID_DPT', '=', 'departement.ID_DPT')
            ->join('roles', 'users.ID_ROLE', '=', 'roles.ID_ROLE')
            ->get();
        //return DB::select('select * from users,  departement, roles where users.ID_DPT=departement.ID_DPT and users.ID_ROLE=roles.ID_ROLE');
        return view(
            'admin.list_admin',
            [
                'roles' => $roles,
                'departement' => $dept,
                'users' => $users
            ]
        );
    }
}
