<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\ArticleCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateArticle;
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
        $data['list'] = $articles_list
//            ->where('status', '=', 0)
//            ->orWhere('status','=',1)
            ->orderBy('created_at', 'DESC')
            ->paginate(5)
            ->appends(['keyword' => $request->get('keyword'), 'category_id' => $request
                ->get('category_id'), 'start' => $request->get('start'), 'end' => $request->get('end')]);
        $data['article_categories'] = $article_categories;
        return view('admin.articles.list')->with($data);
    }

    public function create()
    {
        $article_categories = ArticleCategory::all();
        return view('admin.articles.form')->with('article_categories', $article_categories);
    }

    public function store(ValidateArticle $request)
    {
        $request->validated();
        $obj = new Article();
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->category_id = $request->get('category_id');
        $thumbnail = $request->get('thumbnail');
        foreach ($thumbnail as $thumbnails) {
            $obj->thumbnail .= $thumbnails . ',';
        }
        $obj->status = 1;
        $obj->create_by = 2;
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('admin/articles');
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
        return view('article.detail')->with('article', $article)->with('list_article', $list_article);
    }


    public function edit($id)
    {
        $obj = Article::find($id);
        if ($obj == null) {
            return 'not found';
        }
        $article_categories = ArticleCategory::all();
        return view('admin.articles.form-edit')->with('obj', $obj)->with('article_categories', $article_categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ValidateArticle $request, $id)
    {
        $request->validated();
        $obj = Article::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        $obj->title = $request->get('title');
        $obj->description = $request->get('description');
        $obj->category_id = $request->get('category_id');
        $obj->status = $request->get('status');
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->save();
        return redirect('/admin/articles');
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

    public function DeleteArticle($id)
    {
        $obj = Article::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        $obj->status = 2;
        $obj->save();
    }
}
