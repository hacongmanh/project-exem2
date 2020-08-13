<?php

namespace App\Http\Controllers\Admin;

use App\Breed;
use App\Dog;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateDogs;
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
        $dogs = Breed::all();
        $dogs_list = Dog::query();
        if ($request->has('category_id') && $request->get('category_id') != 0) {
            $data['category_id'] = $request->get('category_id');
            $dogs_list = $dogs_list->where('name', '=', $request->get('category_id'));
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
        $data['list'] = $dogs_list
            ->where('status', '=', 1)
            ->orWhere('status','=',0)
            ->orderBy('created_at', 'DESC')
            ->paginate(5)
            ->appends(['keyword' => $request->get('keyword'), 'id' => $request
                ->get('id'), 'start' => $request->get('start'), 'end' => $request->get('end')]);
        $data['dogs'] = $dogs;
        return view('admin.dogs.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *

     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $dogs = Breed::all();
        return view('admin.dogs.form')->with('dogs',$dogs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ValidateDogs $request)
    {

        $obj = new Dog();
        $obj->name = $request->get('name');
        $obj->price = $request->get('price');
        $obj->birthday = $request->get('birthday');
        $obj->color = $request->get('color');
        $obj->gender = $request->get('gender');
        $obj->breedType = '';
        $obj->mother_id ='';
        $obj->father_id = '';
        $obj->thumbnail = $request->get('thumbnail');
        $obj->description = $request->get('description');
        $obj->category_id = $request->get('category_id');
        $obj->detail = '';
        $obj->status = $request->get('status');

        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';

        }
        $obj->status = 1;
        $obj->updated_at = Carbon::now()->addDays('0')->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/dogs');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
        $obj = Dog::find($id);
        if ($obj == null) {
            return 'not found';
        }
        return view('admin.dogs.form-edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @param $thumbnails
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ValidateDogs $request, $id)
    {
        $request->validated();
        $obj = Dog::find($id);
        $obj->name = $request->get('name');
        $obj->price = $request->get('price');
        $obj->color = $request->get('color');
        $obj->gender = $request->get('gender');
        $obj->description = $request->get('description');
        $obj->status = $request->get('status');
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->updated_at = Carbon::now()->addDays(0)->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/dogs');
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

    public function updateDog($id){
        $obj = Dog::find($id);
        if ($obj == null){
            return view('error/error-404');
        }
        $obj->status = 2;
        $obj->save();
    }
}
