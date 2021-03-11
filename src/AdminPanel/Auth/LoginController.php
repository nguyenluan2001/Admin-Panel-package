<?php

namespace Luan\AdminPanel\AdminPanel\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    function login()
    {
        $auth = Auth::attempt(request()->only(['email', 'password']), true);
        if ($auth) {
            // echo "yes";
            // return redirect()->route('admin.dashboard');
            dd(Auth::user());
        } else {
            echo "no";
        }
        // return auth()->user();
    }
}
