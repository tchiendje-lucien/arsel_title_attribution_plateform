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

class siteController extends Controller
{
    public function create_site()
    {
        $id_admin = session::get('id_admin');
        if (!isset($id_admin) || empty($id_admin)) {
            return redirect('connexion-admin');
        } else {
            $region = DB::table('regions')->get();
            $type_exp = DB::table('type_exploitation')->get();
            $source_energie = DB::table('source_energie')->get();
            $regime = DB::table('regimes')->get();
            return view(
                'sites.add_site',
                [
                    'region' => $region,
                    'src_ener' => $source_energie,
                    'regime' => $regime,
                    'type_exp' => $type_exp
                ]
            );
        }
    }

    public function find_dept($id_region)
    {
        return json_encode(
            DB::table('regions')
                ->where('regions.ID_REGION', $id_region)
                ->join('departements', 'departements.ID_REGION', '=', 'regions.ID_REGION')
                ->get()
        );
    }

    public function find_activity($id_regime)
    {
        return json_encode(
            DB::table('regimes')
                ->where('regimes.ID_REGIME', $id_regime)
                ->join('activites_regimes', 'activites_regimes.ID_REGIME', '=', 'regimes.ID_REGIME')
                ->join('activites', 'activites.ID_ACTIVITE', '=', 'activites_regimes.ID_ACTIVITE')
                ->get()
        );
    }

    public function store_site(Request $req)
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

        if (
            !isset($libelle_site) || empty($libelle_site) || !isset($capacite_site) || empty($capacite_site) ||
            !isset($desc_site) || empty($desc_site) || !isset($type_activite) || empty($type_activite) ||
            $arr_site == "0" || $region_select == "0" || $departement_select == "0" ||
            !isset($quartier_site) || empty($quartier_site) || $type_exp == "0" || $src_ener == "0"
        ) {
            return back()->with('error_site', "Il ya encore des champs vide !! s'il vous plait veillez les remplis");
        }
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

                    DB::insert('insert into arrondissements (ID_DEPARTEMENT, LIBELLE_ARRONDISSEMENT) values (?, ?)', [$departement_select, $arr_site]);
                    $id_arr = DB::select('select LAST_INSERT_ID() as id_arr from arrondissements;')[0];
                    DB::insert('insert into quartiers (LIBELLE_QUARTIER, ID_ARRONDISSEMENT ) values (?, ?)', [$quartier_site, $id_arr->id_arr]);
                    $id_reg_act = DB::table('activites_regimes')
                        ->join('activites', 'activites.ID_ACTIVITE', '=', 'activites_regimes.ID_ACTIVITE')
                        ->join('regimes', 'regimes.ID_REGIME', '=', 'regimes.ID_REGIME')
                        ->where('activites.ID_ACTIVITE', $type_activite)
                        ->where('regimes.ID_REGIME', $type_regime)
                        ->first();
                    DB::insert(
                        'insert into sites (ID_USER, ID_ACTIVITE_REGIME, ID_ARRONDISSEMENT, ID_EXPLOITANT, ID_SOURCE_ENR, LIBELLE_SITE, DESCRIPTION_SITE, CAPACITE_SITE, IS_ACTIVATE, DATE_CREATE)
                     values (?,?,?,?,?,?,?,?,?,?)',
                        [
                            session::get('id_admin'), $id_reg_act->ID_ACTIVITE_REGIME, $id_arr->id_arr, $type_exp, $src_ener,
                            $libelle_site, $desc_site, $capacite_site, 1, Carbon::now()
                        ]
                    );
                    $id_site = DB::select('select LAST_INSERT_ID() as id_site from sites;')[0];
                    DB::insert('insert into images_site (ID_SITE, LIBELLE_IMAGE) values (?, ?)', [$id_site->id_site, $photo]);
                    DB::insert('insert into publication_site (ID_SITE, DATE_PUB) values (?, ?)', [$id_site->id_site, Carbon::now()]);
                    return back()->with('succes_site', 'Le site a été enreigistrer avec success');
                } else {
                    return back()->with('error_site', "Mauvaise extension !! les extentions autorisé sont jpg, jpeg, gif, png");
                }
            } else {
                return back()->with('error_site', "la taille du fichier doit etre inferieur a 5Mo");
            }
        } else {
            return back()->with('error_site', "Veillez selectionnez une image");
        }
    }

    public function create_list_site()
    {
        $id_admin = session::get('id_admin');
        if (!isset($id_admin) || empty($id_admin)) {
            return view('auth.login');
        } else {
            $info_site = DB::table('sites')
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
                'sites.lister_site',
                [
                    'info_site' => $info_site
                ]
            );
        }
    }


    public function find_arrondissement($id_dept)
    {
        return json_encode(
            DB::table('departements')
                ->where('departements.ID_DEPARTEMENT', $id_dept)
                ->join('arrondissements', 'departements.ID_DEPARTEMENT', '=', 'arrondissements.ID_DEPARTEMENT')
                ->get()
        );
    }


    public function delete_site($id_site)
    {
        $update_site = DB::update(
            'update sites set IS_ACTIVATE=?,  DATE_UPDATE = ? where sites.ID_SITE  = ?',
            [
                0, Carbon::now(), $id_site
            ]
        );
        if ($update_site) {
            return back()->with('succes_site', 'Le site a été supprimé avec success');
        } else {
            return back()->with('error_site', "Desolé mais la suppression du site n'a pas pu etre effectuée");
        }
    }


    public function activate_site($id_site)
    {
        $update_site = DB::update(
            'update sites set IS_ACTIVATE=?,  DATE_UPDATE = ? where sites.ID_SITE  = ?',
            [
                1, Carbon::now(), $id_site
            ]
        );
        if ($update_site) {
            return back()->with('succes_site', 'Le site a été activé avec success');
        } else {
            return back()->with('error_site', "Desolé mais l'activation du site n'a pas pu etre effectuée");
        }
    }


    public function find_all_site()
    {
        $region = DB::table('regions')->get();
        $regime = DB::table('regimes')->get();
        $info_site = DB::table('sites')
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
            ->where('IS_ACTIVATE', 1)
            ->paginate(1);
            //echo json_encode($info_site);
        //dd($info_site);
        return view(
            'acceuil',
            [
                'info_site' => $info_site,
                'region' => $region,
                'regime' => $regime
            ]
        );
    }

    public function find_site_by_concession($id_concession)
    {
        $region = DB::table('regions')->get();
        $regime = DB::table('regimes')->get();
        $info_site = DB::table('sites')
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
            ->where('IS_ACTIVATE', 1)
            ->where('regimes.ID_REGIME', $id_concession)
            ->paginate(10);
            echo json_encode($info_site);
        return view(
            'acceuil',
            [
                'info_site' => $info_site,
                'region' => $region,
                'regime' => $regime
            ]
        );
    }


    public function find_site_by_licence($id_licnece)
    {
        $region = DB::table('regions')->get();
        $regime = DB::table('regimes')->get();
        $info_site = DB::table('sites')
            ->where('IS_ACTIVATE', 1)
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
            ->where('regimes.ID_REGIME', $id_licnece)
            ->paginate(10);
        return view(
            'acceuil',
            [
                'info_site' => $info_site,
                'region' => $region,
                'regime' => $regime
            ]
        );
    }


    public function filter_site_by_region($id_region)
    {
        $info_site = DB::table('sites')
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
            ->where('regions.ID_REGION', $id_region)
            ->where('IS_ACTIVATE', 1)
            ->get();
            return json_encode($info_site);
    }

    public function filter_site_by_dept($id_dept)
    {
        $info_site = DB::table('sites')
            ->where('IS_ACTIVATE', 1)
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
            ->where('departements.ID_DEPARTEMENT', $id_dept)
            ->get();
            return json_encode($info_site);
    }

    public function filter_site_by_arr($id_arr)
    {
        $info_site = DB::table('sites')
            ->where('IS_ACTIVATE', 1)
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
            ->where('arrondissements.ID_ARRONDISSEMENT', $id_arr)
            ->get();
            return json_encode($info_site);
    }

    public function filter_site_by_regime($id_reg)
    {
        $info_site = DB::table('sites')
            ->where('IS_ACTIVATE', 1)
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
            ->where('regimes.ID_REGIME', $id_reg)
            ->get();
            return json_encode($info_site);
    }

    public function filter_site_by_activite($id_act)
    {
        $info_site = DB::table('sites')
            ->where('IS_ACTIVATE', 1)
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
            ->where('activites.ID_ACTIVITE', $id_act)
            ->get();
            return json_encode($info_site);
    }
}
