<?php

namespace App\Http\Controllers\Admin;

use App\ArticleCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index(Request $request)
    {

        $data = array();
        $data['id'] = 0;
        $data['keyword'] = '';
        $categories = ArticleCategory::all();
        $category_list = ArticleCategory::query();
        if ($request->has('id') && $request->get('id') != 0) {
            $data['id'] = $request->get('id');
            $category_list = $category_list->where('id', '=', $request->get('id'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $category_list = $category_list->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $category_list = $category_list->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] = $category_list
            ->orderBy('created_at', 'DESC')
            ->where('status','!=','2')
            ->paginate(5)
            ->appends(['keyword' => $request->get('keyword'), 'id' => $request
                ->get('id'), 'start' => $request->get('start'), 'end' => $request->get('end')]);
        $data['categories'] = $categories;
        return view('admin.article-categories.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.article-categories.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ValidateArticleCategory $request)
    {
        $request->validated();
        $obj = new ArticleCategory();
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');
        $obj->id = $request->get('id');
        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->status = 1;
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('admin/article-categories');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
// $category = ArticleCategory::find($id);
// $list_Article_category = ArticleCategory::all();
// if ($category == null) {
// return view('error')->with('msg', 'Category không tồn tại!');
// }
// return view('article-categories.detail')->with('category', $category)->with('$list_Article_category', $list_Article_category);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function edit($id)
    {
        $obj = ArticleCategory::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        return view('admin.article-categories.form-edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(ValidateArticleCategory $request, $id)
    {
        $request->validated();
        $obj = ArticleCategory::find($id);
        $obj->status = $request->get('status');
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->save();
        return redirect('/admin/article-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Request $request)
    {

    }

    public function updateArticleCategory($id){
        $categories = ArticleCategory::find($id);
        if ($categories == null){
            return view('error/error-404');
        }
        $categories->status = 2;
        $categories->save();
    }
}
