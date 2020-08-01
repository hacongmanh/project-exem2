<?php

namespace App\Http\Controllers;

use App\Accounts;
use App\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminAccountController extends Controller
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
        $account = Accounts::all();
        $account_list = Accounts::query();
        if ($request->has('user_name') && $request->get('user_name') != 0) {
            $data['user_name'] = $request->get('user_name');
            $account_list = $account_list->where('user_name', '=', $request->get('user_name'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $account_list = $account_list->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $account_list = $account_list->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $account_list->where('user_name', 'like', '%' .$request->get('keyword'). '%')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
        $data['categories'] = $account;
        return view('admin.admin-account')
            ->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin/admin-account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function store(Request $request)
    {
        $obj = new Accounts();
        $obj->user_name = $request->get('user_name');
        $obj->password_hash = $request->get('password');
        $obj->email = $request->get('email');
        $obj->full_name = $request->get('full_name');
        $obj->phone = $request->get('phone');
        $obj->address = $request->get('address');
        $obj = $request->get('thumbnail');
        $obj->role = 1;
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/admin-account');

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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
