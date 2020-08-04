<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Dog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DogController extends Controller
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
        $dogs = Dog::all();
        $dogs_list = Dog::query();
        if ($request->has('name') && $request->get('name') != 0) {
            $data['user_name'] = $request->get('user_name');
            $dogs = $dogs_list->where('name', '=', $request->get('name'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $dogs_list = $dogs_list->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $dogs_list = $dogs_list->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $dogs_list->where('name', 'like', '%' .$request->get('keyword'). '%')
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
        $data['categories'] = $dogs;
        return view('admin.admin-dog')
            ->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/admin-form-dog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $obj = new Dog();
        $obj->name = $request->get('name');
        $obj->price = $request->get('price');
        $obj->birthday = $request->get('birthday');
        $obj->color = $request->get('color');
        $obj->gender = $request->get('gender');
        $obj->breedType = $request->get('breedType');
        $obj->mother_id = $request->get('mother_id');
        $obj->father_id = $request->get('father_id');
        $obj->description = $request->get('description');
        $obj->detail = $request->get('detail');
        $obj->category_id = $request->get('category_id');
        $thumbnail = $request->get('thumbnail');
        foreach ($thumbnail as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }

        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/dog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
