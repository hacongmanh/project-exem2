<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\ArticleCategory;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('home.login.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('home.login.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $password = $request->get('password');
        $salt = substr(sha1(rand()), 0, 7);
        $obj = new Account();
        $obj->user_name = $request->get('user_name');
        $obj->email = $request->get('email');
        $obj->full_name = $request->get('full_name');
        $obj->phone = $request->get('phone');
        $obj->address = $request->get('address');

        $obj->password_hash = md5($password . $salt);
        $obj->thumbnail = '';
        $obj->role = 1;
        $obj->salt = $salt;
        $obj->status = 2;
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return view('home.login.signin');
    }
    public function logOutUser(){
        Session::remove('email');
        Session::remove('role');

        return redirect('/homes');
    }
}
