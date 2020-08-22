<?php


namespace App\Http\Controllers\Admin;

use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('home.login.signin');
    }

    public function processLogin(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('pass');
        $existingAccount = Account::where('email', '=', $email)->first();
        if ($existingAccount == null) {
            return 'Login fails';
        }
        if (md5($password . $existingAccount->salt) != $existingAccount->password_hash) {
            return 'Login fails 2';
        }
        $request->getSession()->put('email', $existingAccount->email);
        $request->getSession()->put('role', $existingAccount->role);
        return redirect('/admin/dogs');
    }
    public function logOutAdmin(){
        Session::remove('email');
        Session::remove('role');
        return redirect('/homes');
    }
}
