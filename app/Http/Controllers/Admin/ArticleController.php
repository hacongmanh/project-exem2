<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\ArticleCategory;
use App\Http\Controllers\Controller;
 update

use App\Http\Requests\ValidateArticle;
 master
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $data = array();
        $data['category_id'] = 0;
        $data['keyword'] = '';
        $article_categories = ArticleCategory::all();
        $articles_list = Article::query();
        if ($request->has('category_id') && $request->get('category_id') != 0) {
            $data['category_id'] = $request->get('category_id');
            $articles_list = $articles_list->where('category_id', '=', $request->get('category_id'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $articles_list = $articles_list->where('title', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $articles_list = $articles_list->whereBetween('created_at', [$from, $to]);
        }
 update
        $data['list'] = $articles_list->orderBy('created_at', 'DESC')->paginate(2)
            ->appends(['keyword' => $request->get('keyword'), 'category_id' => $request->get('category_id'), 'start' => $request->get('start'), 'end' => $request->get('end')]);
        $data['article_categories'] = $article_categories;
        return view('admin.articles.list')->with($data);

        $data['list'] = $articles_list
            ->where('status', '=', 1)
            ->orderBy('created_at', 'DESC')
            ->paginate(5)
            ->appends(['keyword' => $request->get('keyword'), 'category_id' => $request
                ->get('category_id'), 'start' => $request->get('start'), 'end' => $request->get('end')]);
        $data['article_categories'] = $article_categories;
        return view('admin.articles.list')->with($data);

 master
    }

    /**
     * Show the form for creating a new resource.
     *
 update
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.form');

     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $article_categories = ArticleCategory::all();
        return view('admin.articles.form')->with('article_categories', $article_categories);
 master
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
 update
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

     * @param $article_form
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ValidateArticle $request)
    {
        $request->validated();
 master
        $obj = new Article();
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->category_id = $request->get('category_id');
update
        $obj->create_by = $request->get('create_by');
        $thumbnails = $request->get('thumbnails');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->status = 1;

        $obj->create_by = 2;
        $obj->status = 0;
        $thumbnail = $request->get('thumbnails');
        foreach ($thumbnail as $thumbnails) {
            $obj->thumbnail .= $thumbnails . ',';
        }
 master
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::find($id);
        $list_article = Article::all();
        if ($article == null) {
            return view('error')->with('msg', 'Category không tồn tại!');
        }
 update
        return view('article.detail')->with('article', $article)->with('list_artucle', $list_article);

        return view('article.detail')->with('article', $article)->with('list_article', $list_article);
 master
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
 update
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $obj = Article::find($id);
        if ($obj == null) {
            return 'not found';
        }
        $article_categories = ArticleCategory::all();
        return view('admin.articles.form-edit')->with('obj', $obj)->with('article_categories', $article_categories);
 master
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
