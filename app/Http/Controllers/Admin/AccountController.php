<?php

namespace App\Http\Controllers\Admin;

use App\Account;

use App\Breed;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {

        $data = array();
        $data['category_id'] = 0;
        $data['keyword'] = '';
        $account = Account::all();
        $account_categories = Account::query();
        if ($request->has('user_name') && $request->get('user_name') != 0) {
            $data['user_name'] = $request->get('user_name');
            $account = $account->where('user_name', '=', $request->get('user_name'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $account = $account->where('user_name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $account = $account->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $account_categories->where('user_name', 'like', '%' .$request->get('keyword'). '%')
            ->where('status', '=', 2)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
        $data['$account'] = $account;
        return view('admin.accounts.list')
            ->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $account_categories = Account::all();
        return view('admin.accounts.form')->with('account_categories',  $account_categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function store(ValidateAccount $request)
    {   $request->validated();
        $obj = new Account();
        $obj->user_name = $request->get('user_name');
        $password = $request->get('password');
        $salt = substr(sha1(rand()), 0, 7);
        $obj->password_hash = md5($password . $salt);
        $obj->email = $request->get('email');
        $obj->full_name = $request->get('full_name');
        $obj->phone = $request->get('phone');
        $obj->address = $request->get('address');
        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->role = $request->get('role');
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('admin/accounts');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {

        $obj = Account::find($id);
        if ($obj == null) {
            return 'not found';
        }
        $accounts_categories = Account::all();
        return view('admin.accounts.form-edit')->with('obj', $obj)->with('accounts_categories', $accounts_categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ValidateAccount $request, $id)
    {   $request->validated();
        $obj = Account::find($id);
        $obj->user_name = $request->get('user_name');
        $password = $request->get('password');
        $salt = substr(sha1(rand()), 0, 7);
        $obj->password_hash = md5($password . $salt);
        $obj->email = $request->get('email');
        $obj->full_name = $request->get('full_name');
        $obj->phone = $request->get('phone');
        $obj->address = $request->get('address');
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->role = $request->get('role');
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('admin/accounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function DeleteArticle($id){
        $obj = Account::find($id);
        if ($obj == null){
            return view('error/error-404');
        }
        $obj->status = 1;
        $obj->save();
    }


}
