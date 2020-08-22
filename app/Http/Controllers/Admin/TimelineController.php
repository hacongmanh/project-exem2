<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\imgtimeline;
use App\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $data['id'] = 0;
        $data['keyword'] = '';
        $article_categories = Timeline::all();
        $articles_list = Timeline::query();
        if ($request->has('id') && $request->get('id') != 0) {
            $data['id'] = $request->get('id');
            $articles_list = $articles_list->where('id', '=', $request->get('id'));
        }
        if ($request->has('keyword') && strlen($request->get('keyword')) > 0) {
            $data['keyword'] = $request->get('keyword');
            $articles_list = $articles_list->where('type', 'like', '%' . $request->get('keyword') . '%');
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $articles_list = $articles_list->whereBetween('created_at', [$from, $to]);
        }
// lọc theo trạng thái
        $articles_list = $articles_list->where('status', '!=', 3);
        $data['list'] = $articles_list
            ->orderBy('created_at', 'DESC')
            ->paginate(5)
            ->appends(['keyword' => $request->get('keyword'), 'id' => $request
                ->get('id'), 'start' => $request->get('start'), 'end' => $request->get('end')]);

        $data['article_categories'] = $article_categories;
        return view('admin.timeline.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article_categories = Timeline::all();
        return view('admin.timeline.form')->with('article_categories', $article_categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Timeline();
        $obj->type = $request->get('type');
        $obj->content = $request->get('content');
        $obj->dog_id = 4;
        $obj->video = 'https://www.youtube.com/watch?v=LYQnAiP52bs ';
        $obj->created_by = 1;
        $thumbnails = $request->get('thumbnail');
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->status = 1;
        $obj->updated_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('admin/timeline');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Timeline::find($id);
        $list_article = Timeline::all();
        if ($article == null) {
            return view('error')->with('msg', 'Timeline không tồn tại!');
        }
        return view('article.timeline')->with('article', $article)->with('list_article', $list_article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Timeline::find($id);
        if ($obj == null) {
            return 'not found';
        }
        $article_categories = imgtimeline::all();
        return view('admin.timeline.form-edit')->with('obj', $obj)->with('article_categories', $article_categories);
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
        $obj = Timeline::find($id);
        if ($obj == null) {
            return view('error.404');
        }
        $obj->type = $request->get('type');
        $obj->content = $request->get('content');
        $obj->content = $request->get('video');
        $obj->created_by = 1;
        $thumbnails = $request->get('thumbnails');
        $obj->thumbnail = '';
        foreach ($thumbnails as $thumbnail) {
            $obj->thumbnail .= $thumbnail . ',';
        }
        $obj->status = 1;
        $obj->save();
        return redirect('/admin/timeline');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function DeleteArticle($id)
    {
        $obj = Timeline::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        $obj->status = 3;
        $obj->save();
    }
}
