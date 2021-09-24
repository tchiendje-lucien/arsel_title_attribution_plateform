<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PDF;

class documentationController extends Controller
{
    public function create_regime()
    {
        return view('Documentation.regime');
    }

    public function create_juridiction()
    {
        return view('Documentation.juridiction');
    }

    public function create_procedure_invest(){
        return view('Documentation.procedure');
    }

    public function create_raison_invest(){

    }

    public function create_juridiction_regime()
    {
        return view('Documentation.juridiction_regime');
    }

    public function download_loi($loi_name)
    {
        $file_path = public_path('Documentations/Lois/' . $loi_name);
        return response()->download($file_path);
    }

    public function download_decret($decret_name)
    {
        $file_path = public_path('Documentations/Decrets/' . $decret_name);
        return response()->download($file_path);
    }

    public function download_arrete($arrete_name)
    {
        $file_path = public_path('Documentations/Arretes/' . $arrete_name);
        return response()->download($file_path);
    }

    public function view_arrete($arrete_name)
    {
        $file_path = public_path('Documentations/Arretes/' . $arrete_name);
        return response()->file($file_path);
    }

    public function view_decret($decret_name)
    {
        $file_path = public_path('Documentations/Decrets/' . $decret_name);
        return response()->file($file_path);
    }

    public function view_loi($loi_name)
    {
        $file_path = public_path('Documentations/Lois/' . $loi_name);
        return response()->file($file_path);
    }

    public function dowload_loi_regime($loi_name)
    {
        $file_path =public_path('Documentations/pdf_regimes/'.$loi_name);
        return response()->file($file_path);
    }

    public function dowload_procedure($loi_name)
    {
        $file_path =public_path('Documentations/procedures/'.$loi_name);
        return response()->file($file_path);
    }

}
