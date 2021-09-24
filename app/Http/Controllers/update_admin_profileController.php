<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class update_admin_profileController extends Controller
{

    public function create_admin_profile()
    {
        $id_admin = session::get('id_admin');
        if (!isset($id_admin) || empty($id_admin)) {
            return redirect('connexion-admin');
        } else {
            $infos_admin = DB::table('users')
                ->where('ID_USER', $id_admin)
                ->get();
            return view(
                'admin.admin_profile',
                [
                    'infos_admin' => $infos_admin
                ]
            );
        }
    }


    public function update_user_profile(Request $req, $id_admin)
    {
        $name = verify_input($req->input('nom_admin'));
        $prenom = verify_input($req->input('prenom_admin'));
        $email = verify_input($req->input('email_admin'));
        $phone_admin = verify_input($req->input('phone_admin'));
        $old_pass_admin = verify_input($req->input('old_pass_admin'));
        $new_pass_admin = verify_input($req->input('new_pass_admin'));
        $confirm_pass_admin = verify_input($req->input('confirm_pass_admin'));
        $PASSWORD_REGEX = '/^(?=.*\d).{5,25}$/';
        $old_admin_image = 'default_admin_image.png';
        $photo = $_FILES['image_admin']['name'];
        $EMAIL_REGEX = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

        if (!isset($name) || empty($name) || !isset($prenom) || empty($prenom) || !isset($email) || empty($email)) {
            return back()->with('empty_input', 'Veillez remplir tous les champs');
        }
        if (!preg_match($EMAIL_REGEX, $email)) {
            return back()->with('email_error', 'Cette adresse email est invalide');
        }
        if (!isset($photo) || empty($photo)) {
            if (
                !isset($old_pass_admin) || empty($old_pass_admin)
            ) {
                $user_request = DB::table('users')->where('ID_USER', $id_admin)->first();
                if ($user_request) {
                    if ($user_request->EMAIL == $email) {

                        if (DB::update(
                            'update users set NOM = ?, PRENOM=?, EMAIL=?, TELEPHONE=?, PHOTO_ADMIN=?, DATE_UPDATE=?
                            where ID_USER=?',
                            [
                                $name,
                                $prenom,
                                $email,
                                $phone_admin,
                                $old_admin_image,
                                Carbon::now(),
                                $id_admin,
                                $email

                            ]
                        )) {
                            return back()->with('success_update', 'La modification a été effectué avec success');
                        } else {
                            return back()->with('error_update', 'La modification de votre profil a échoué');
                        }
                    } else {
                        if (DB::table('users')->where('EMAIL', $email)) {
                            return back()->with('error_update', 'Cette adresse email est deja utiliée');
                        } else {

                            if (DB::update(
                                'update users set NOM = ?, PRENOM=?, EMAIL=?, TELEPHONE=?, DATE_UPDATE=?
                                where ID_USER=?',
                                [
                                    $name,
                                    $prenom,
                                    $email,
                                    $phone_admin,
                                    Carbon::now(),
                                    $id_admin,
                                    $email

                                ]
                            )) {
                                return back()->with('success_update', 'La modification a été effectué avec success');
                            } else {
                                return back()->with('error_update', 'La modification de votre profil a échoué');
                            }
                        }
                    }
                }
            } else {
                if (!isset($new_pass_admin) || empty($new_pass_admin) || !isset($confirm_pass_admin) || empty($confirm_pass_admin)) {
                    return back()->with('error_update', 'Veillez remplir tous les champs de mot de passe');
                }
                if (!preg_match($PASSWORD_REGEX, $new_pass_admin)) {
                    return back()->with('error_update', 'Pour des raison de securité le mot de passe doit avoir au moins 5 caractere, possedé des nombre et des symboles');
                }
                if ($new_pass_admin != $confirm_pass_admin) {
                    return back()->with('error_update', 'Le nouveau mot de passe est different de la confirmation');
                }

                $password_admin = DB::table('users')
                    ->where('ID_USER', session::get('id_admin'))
                    ->first();
                if (Hash::check($old_pass_admin, $password_admin->PASSWORD)) {
                    if (DB::update(
                        'update users set NOM = ?, PRENOM=?, EMAIL=?, PASSWORD=?, TELEPHONE=?,  DATE_UPDATE=?
                    where ID_USER=?',
                        [
                            $name,
                            $prenom,
                            $email,
                            Hash::make($new_pass_admin),
                            $phone_admin,
                            Carbon::now(),
                            $id_admin

                        ]
                    )) {
                        return back()->with('success_update', 'La modification a été effectué avec success');
                    } else {
                        return back()->with('error_update', 'La modification a échoué');
                    }
                } else {
                    return back()->with('error_update', "L'ancien mot de passe ne correspond pas");
                }
            }
        } else {
            if (isset($_FILES['image_admin']) and $_FILES['image_admin']['error'] == 0) {
                // Testons si le fichier n'est pas trop gros
                if ($_FILES['image_admin']['size'] <= 10000000) {
                    // Testons si l'extension est autorisée
                    $infosfichier = pathinfo($_FILES['image_admin']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $photo = uniqid() . '.' . $extension_upload;
                    $upload = "images_admin/" . $photo;
                    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'PNG');
                    if (in_array($extension_upload, $extensions_autorisees)) {
                        if (
                            !isset($old_pass_admin) || empty($old_pass_admin)
                        ) {
                            $user_request = DB::table('users')->where('ID_USER', $id_admin)->first();
                            if ($user_request) {
                                move_uploaded_file($_FILES['image_admin']['tmp_name'], $upload);
                                if ($user_request->EMAIL == $email) {

                                    if (DB::update(
                                        'update users set NOM = ?, PRENOM=?, EMAIL=?, TELEPHONE=?, PHOTO_ADMIN=?, DATE_UPDATE=?
                                        where ID_USER=?',
                                        [
                                            $name,
                                            $prenom,
                                            $email,
                                            $phone_admin,
                                            $photo,
                                            Carbon::now(),
                                            $id_admin,
                                            $email

                                        ]
                                    )) {
                                        return back()->with('success_update', 'La modification a été effectué avec success');
                                    } else {
                                        return back()->with('error_update', 'La modification de votre profil a échoué');
                                    }
                                } else {
                                    if (DB::table('users')->where('EMAIL', $email)) {
                                        return back()->with('error_update', 'Cette adresse email est deja utiliée');
                                    } else {
                                        move_uploaded_file($_FILES['image_admin']['tmp_name'], $upload);
                                        if (DB::update(
                                            'update users set NOM = ?, PRENOM=?, EMAIL=?, TELEPHONE=?, PHOTO_ADMIN, DATE_UPDATE=?
                                            where ID_USER=?',
                                            [
                                                $name,
                                                $prenom,
                                                $email,
                                                $phone_admin,
                                                $photo,
                                                Carbon::now(),
                                                $id_admin,
                                                $email

                                            ]
                                        )) {
                                            return back()->with('success_update', 'La modification a été effectué avec success');
                                        } else {
                                            return back()->with('error_update', 'La modification de votre profil a échoué');
                                        }
                                    }
                                }
                            }
                        } else {
                            if (!isset($new_pass_admin) || empty($new_pass_admin) || !isset($confirm_pass_admin) || empty($confirm_pass_admin)) {
                                return back()->with('error_update', 'Veillez remplir tous les champs de mot de passe');
                            }
                            if (!preg_match($PASSWORD_REGEX, $new_pass_admin)) {
                                return back()->with('error_update', 'Pour des raison de securité le mot de passe doit avoir au moins 5 caractere, possedé des nombre et des symboles');
                            }
                            if ($new_pass_admin != $confirm_pass_admin) {
                                return back()->with('error_update', 'Le nouveau mot de passe est different de la confirmation');
                            }

                            $password_admin = DB::table('users')
                                ->where('ID_USER', session::get('id_admin'))
                                ->first();
                            if (Hash::check($old_pass_admin, $password_admin->PASSWORD)) {
                                move_uploaded_file($_FILES['image_admin']['tmp_name'], $upload);
                                if (DB::update(
                                    'update users set NOM = ?, PRENOM=?, EMAIL=?, PASSWORD=?, TELEPHONE=?, PHOTO_ADMIN, DATE_UPDATE=?
                                where ID_USER=?',
                                    [
                                        $name,
                                        $prenom,
                                        $email,
                                        Hash::make($new_pass_admin),
                                        $phone_admin,
                                        $photo,
                                        Carbon::now(),
                                        $id_admin

                                    ]
                                )) {
                                    return back()->with('success_update', 'La modification a été effectué avec success');
                                } else {
                                    return back()->with('error_update', 'La modification a échoué');
                                }
                            } else {
                                return back()->with('error_update', "L'ancien mot de passe ne correspond pas");
                            }
                        }
                    } else {
                        return back()->with('error_site', "Mauvaise extension d'image !! les extentions autorisé sont jpg, jpeg, gif, PNG");
                    }
                } else {
                    return back()->with('error_site', "la taille du fichier doit etre inferieur a 5Mo");
                }
            } else {
                return back()->with('error_site', "Veillez selectionnez une image");
            }
        }
    }
}
