<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class update_siteController extends Controller
{
    public function create_update_site($id_site)
    {
        $id_admin = session::get('id_admin');
        if (!isset($id_admin) || empty($id_admin)) {
            return redirect('connexion-admin');
        } else {
            $region = DB::table('regions')->get();
            $type_exp = DB::table('type_exploitation')->get();
            $source_energie = DB::table('source_energie')->get();
            $regime = DB::table('regimes')->get();
            $info_site = DB::table('sites')
                ->where('sites.ID_SITE', $id_site)
                ->join('arrondissements', 'arrondissements.ID_ARRONDISSEMENT', '=', 'sites.ID_ARRONDISSEMENT')
                ->join('images_site', 'images_site.ID_SITE', '=', 'sites.ID_SITE')
                ->join('publication_site', 'publication_site.ID_SITE', '=', 'sites.ID_SITE')
                ->join('source_energie', 'source_energie.ID_SOURCE_ENR', '=', 'sites.ID_SOURCE_ENR')
                ->join('activites_regimes', 'activites_regimes.ID_ACTIVITE_REGIME', '=', 'sites.ID_ACTIVITE_REGIME')
                ->join('users', 'users.ID_USER', '=', 'sites.ID_USER')
                ->join('type_exploitation', 'type_exploitation.ID_EXPLOITANT', '=', 'sites.ID_EXPLOITANT')
                ->join('activites', 'activites.ID_ACTIVITE', '=', 'activites_regimes.ID_ACTIVITE')
                ->join('regimes', 'regimes.ID_REGIME', '=', 'activites_regimes.ID_ACTIVITE')
                ->join('departements', 'departements.ID_DEPARTEMENT', '=', 'arrondissements.ID_DEPARTEMENT')
                ->join('regions', 'regions.ID_REGION', '=', 'departements.ID_REGION')
                ->join('quartiers', 'arrondissements.ID_ARRONDISSEMENT', '=', 'quartiers.ID_ARRONDISSEMENT')
                ->get();
            return view(
                'sites.edit_update_site',
                [
                    'info_site' => $info_site,
                    'region' => $region,
                    'src_ener' => $source_energie,
                    'regime' => $regime,
                    'type_exp' => $type_exp
                ]
            );
        }
    }

    public function update_site(Request $req, $id_site)
    {
        $libelle_site = verify_input($req->input('libelle_site'));
        $capacite_site = verify_input($req->input('capacite_site'));
        $desc_site = verify_input($req->input('desc_site'));
        $region_select = verify_input($req->input('region_select'));
        $departement_select = verify_input($req->input('departement_select'));
        $arr_site = verify_input($req->input('arr_site'));
        $quartier_site = verify_input($req->input('quartier_site'));
        $type_exp = verify_input($req->input('type_exp'));
        $type_activite = verify_input($req->input('type_activite'));
        $src_ener = verify_input($req->input('src_ener'));
        $type_regime = verify_input($req->input('type_regime'));
        $photo = $_FILES['image_site']['name'];
        $old_image_site = verify_input($req->input('old_image_site'));

        if (
            !isset($libelle_site) || empty($libelle_site) || !isset($capacite_site) || empty($capacite_site) ||
            !isset($desc_site) || empty($desc_site) || !isset($type_activite) || empty($type_activite) ||
            $arr_site == "0" || $region_select == "0" || $departement_select == "0" ||
            !isset($quartier_site) || empty($quartier_site) || $type_exp == "0" || $src_ener == "0"
        ) {
            return back()->with('error_site', "Il ya encore des champs vide !! s'il vous plait veillez les remplis");
        }
        if (!isset($photo) || empty($photo)) {
            $id_reg_act = DB::table('activites_regimes')
                ->join('activites', 'activites.ID_ACTIVITE', '=', 'activites_regimes.ID_ACTIVITE')
                ->join('regimes', 'regimes.ID_REGIME', '=', 'regimes.ID_REGIME')
                ->where('activites.ID_ACTIVITE', $type_activite)
                ->where('regimes.ID_REGIME', $type_regime)
                ->first();
            $update_site = DB::update(
                'update sites, images_site set ID_ACTIVITE_REGIME=?, ID_ARRONDISSEMENT = ?, ID_EXPLOITANT = ?, ID_SOURCE_ENR = ?,
            LIBELLE_SITE = ? , DESCRIPTION_SITE = ?, CAPACITE_SITE = ?,  LIBELLE_IMAGE = ?, DATE_UPDATE = ? where sites.ID_SITE  = ?',
                [
                    $id_reg_act->ID_ACTIVITE_REGIME, $arr_site, $type_exp, $src_ener,
                    $libelle_site, $desc_site, $capacite_site, $old_image_site, Carbon::now(), $id_site
                ]
            );
            if ($update_site) {
                return back()->with('succes_site', 'Le site a été modifier avec success');
            } else {
                return back()->with('error_site', "Desolé mais la modifification du site n'a pas pu etre effectuée");
            }
        } else {
            if (isset($_FILES['image_site']) and $_FILES['image_site']['error'] == 0) {
                // Testons si le fichier n'est pas trop gros
                if ($_FILES['image_site']['size'] <= 10000000) {
                    // Testons si l'extension est autorisée
                    $infosfichier = pathinfo($_FILES['image_site']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $photo = uniqid() . '.' . $extension_upload;
                    $upload = "images_site/" . $photo;
                    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'PNG');
                    if (in_array($extension_upload, $extensions_autorisees)) {
                        // On peut valider le fichier et le stocker définitivement   cPn1K*t0HC
                        move_uploaded_file($_FILES['image_site']['tmp_name'], $upload);

                        $id_reg_act = DB::table('activites_regimes')
                            ->join('activites', 'activites.ID_ACTIVITE', '=', 'activites_regimes.ID_ACTIVITE')
                            ->join('regimes', 'regimes.ID_REGIME', '=', 'regimes.ID_REGIME')
                            ->where('activites.ID_ACTIVITE', $type_activite)
                            ->where('regimes.ID_REGIME', $type_regime)
                            ->first();
                        $update_site = DB::update(
                            'update sites, images_site set ID_ACTIVITE_REGIME=?, ID_ARRONDISSEMENT = ?, ID_EXPLOITANT = ?, ID_SOURCE_ENR = ?,
                            LIBELLE_SITE = ? , DESCRIPTION_SITE = ?, CAPACITE_SITE = ?,  LIBELLE_IMAGE = ?, DATE_UPDATE = ? where sites.ID_SITE  = ?',
                            [
                                $id_reg_act->ID_ACTIVITE_REGIME, $arr_site, $type_exp, $src_ener,
                                $libelle_site, $desc_site, $capacite_site, $photo, Carbon::now(), $id_site
                            ]
                        );
                        if ($update_site) {
                            return back()->with('succes_site', 'Le site a été modifier avec success');
                        } else {
                            return back()->with('error_site', "Desolé mais la modifification du site n'a pas pu etre effectuée");
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

    public function edit_site_user($id_site)
    {
        $info_site = DB::table('sites')
            ->where('sites.ID_SITE', $id_site)
            ->join('arrondissements', 'arrondissements.ID_ARRONDISSEMENT', '=', 'sites.ID_ARRONDISSEMENT')
            ->join('images_site', 'images_site.ID_SITE', '=', 'sites.ID_SITE')
            ->join('publication_site', 'publication_site.ID_SITE', '=', 'sites.ID_SITE')
            ->join('source_energie', 'source_energie.ID_SOURCE_ENR', '=', 'sites.ID_SOURCE_ENR')
            ->join('activites_regimes', 'activites_regimes.ID_ACTIVITE_REGIME', '=', 'sites.ID_ACTIVITE_REGIME')
            ->join('users', 'users.ID_USER', '=', 'sites.ID_USER')
            ->join('type_exploitation', 'type_exploitation.ID_EXPLOITANT', '=', 'sites.ID_EXPLOITANT')
            ->join('activites', 'activites.ID_ACTIVITE', '=', 'activites_regimes.ID_ACTIVITE')
            ->join('regimes', 'regimes.ID_REGIME', '=', 'activites_regimes.ID_ACTIVITE')
            ->join('departements', 'departements.ID_DEPARTEMENT', '=', 'arrondissements.ID_DEPARTEMENT')
            ->join('regions', 'regions.ID_REGION', '=', 'departements.ID_REGION')
            ->join('quartiers', 'arrondissements.ID_ARRONDISSEMENT', '=', 'quartiers.ID_ARRONDISSEMENT')
            ->get();
        return view(
            'sites.user_edit_site',
            [
                'info_site' => $info_site,
            ]
        );
    }
}
