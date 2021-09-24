<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_profileController extends Controller
{
    public function create_user_profile()
    {
        return view('admin.profile');
    }
}
