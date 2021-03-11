<?php
namespace Luan\AdminPanel\AdminPanel\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login()
    {
        $auth=auth()->attempt(request()->only(['email','password']),true);
        if($auth)
        {
            echo "yes";
            return redirect()->route('admin.dashboard');
        }
        else
        {
            echo "no";
        }
        // return auth()->user();
    }
}