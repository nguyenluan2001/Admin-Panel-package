<?php
namespace Luan\AdminPanel\AdminPanel\Auth;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}