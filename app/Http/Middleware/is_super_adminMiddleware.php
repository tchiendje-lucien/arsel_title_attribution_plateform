<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class is_super_adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $id_admin = session::get('id_admin');
        $id_role = session::get('id_role');

        if (!isset($id_admin) || empty($id_admin)) {
            return redirect('connexion-admin');
        } else if ($id_role != 2) {
        } else {
            return $next($request);
        }
    }
}
