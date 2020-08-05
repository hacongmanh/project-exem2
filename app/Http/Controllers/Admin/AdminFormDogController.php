<?php

namespace App\Http\Controllers;

use App\Article;
use App\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminFormDogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin/admin-form-dog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
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