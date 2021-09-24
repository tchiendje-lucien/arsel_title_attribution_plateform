<?php

use Illuminate\Support\Facades\Session;

function verify_input($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);

    return $var;
}

function verify_connexion()
{
    $id_admin = session::get('id_admin');
    if (!isset($id_admin) || empty($id_admin)) {
        return redirect('connexion-admin');
    }
}
