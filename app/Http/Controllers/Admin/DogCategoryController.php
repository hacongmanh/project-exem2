<?php

namespace App\Http\Controllers\Admin;

use App\Breed;
use App\DogCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateDogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index(Request $request)
    {
        $data = array();
        $data['category_id'] = 0;
        $data['keyword'] = '';
        $breed_list = Breed::all();
        $dogs_categories = DogCategory::query();
        if ($request->has('category_id') && $request->get('category_id') != 0) {
            $data['category_id'] = $request->get('category_id');
            $dogs_categories = $dogs_categories->where('breedType', '=', $request->get('category_id'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $dogs_categories = $dogs_categories->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $dogs_categories = $dogs_categories->whereBetween('created_at', [$from, $to]);
        }
        $dogs_categories = $dogs_categories->where('status', '!=', 2);
        $data['list'] = $dogs_categories
            ->orderBy('created_at', 'DESC')
            ->paginate(5)
            ->appends(['keyword' => $request->get('keyword'), 'category_id' => $request
                ->get('category_id'), 'start' => $request->get('start'), 'end' => $request->get('end')]);
        $data['dogs_categories'] = $breed_list;
        return view('admin.dog-category.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $dog_categories = Breed::all();
        return view('admin.dog-category.form')->with('dog_categories', $dog_categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ValidateDogCategory $request)
    {   $request->validated();
        $obj = new DogCategory();
        $obj->name = $request->get('name');
        $obj->breedType = $request->get('breedType');
        $obj->status = 1;
        $thumbnails = $request->get('thumbnail');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();

        return redirect('/admin/dogs-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $dog = DogCategory::find($id);
        $list_dog = DogCategory::all();
        if ($dog == null) {
            return view('error')->with('msg', 'Category không tồn tại!');
        }
        return view('article.detail')->with('dog', $dog)->with('list_dog', $list_dog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
        $obj = DogCategory::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        $breed_categories = Breed::all();
        return view('admin.dog-category.form-edit')->with('obj', $obj)->with('breed_categories', $breed_categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(ValidateDogCategory $request, $id)
    {   $request->validated();
        $obj = DogCategory::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        $obj->name = $request->get('name');
        $obj->breedType = $request->get('breedType');
        $obj->status = 1;
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();

        return redirect('/admin/dogs-categories');
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

    public function DeleteDogCategory($id)
    {
        $obj = DogCategory::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        $obj->status = 2;
        $obj->save();
    }
}
