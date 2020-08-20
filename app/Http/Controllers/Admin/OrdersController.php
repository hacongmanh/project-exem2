<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrdersController extends Controller
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
        $article_categories = Order::all();
        $articles_list = Order::query();
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
        // lọc theo trạng thái
        $articles_list = $articles_list->where('status', '=', 'chưa duyệt');
        $data['list'] = $articles_list
            ->orderBy('created_at', 'DESC')
            ->paginate(5)
            ->appends(['keyword' => $request->get('keyword'), 'category_id' => $request
                ->get('category_id'), 'start' => $request->get('start'), 'end' => $request->get('end')]);

        $data['article_categories'] = $article_categories;
        return view('admin.order.list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article_categories = Order::all();
        return view('admin.order.form')->with('article_categories', $article_categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj = new Order();
        $obj->ship_name = $request->get('ship_name');
        $obj->total = $request->get('total');
        $obj->ship_name = $request->get('ship_name');
        $obj->ship_phone = $request->get('ship_phone');
        $obj->ship_address = $request->get('ship_address');
        $obj->ship_email = $request->get('ship_email');
        $obj->notes = $request->get('notes');
        $obj->status = 1;
        $obj->updated_at = Carbon::now()->addDays('0')->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('admin/order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $article = Order::find($id);
        $list_article = Order::all();
        if ($article == null) {
            return view('error')->with('msg', 'Category không tồn tại!');
        }
        return view('article.detail')->with('article', $article)->with('list_article', $list_article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Order::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        $article_categories = Order::all();
        return view('admin.order.form-edit')->with('obj', $obj)->with('article_categories', $article_categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $obj = new Order();
        $obj->ship_name = $request->get('ship_name');
        $obj->total = $request->get('total');
        $obj->ship_name = $request->get('ship_name');
        $obj->ship_phone = $request->get('ship_phone');
        $obj->ship_address = $request->get('ship_address');
        $obj->ship_email = $request->get('ship_email');
        $obj->notes = $request->get('notes');
        $obj->status = 1;
        $obj->updated_at = Carbon::now()->addDays('0')->format('Y-m-d H:i:s');
        $obj->created_at = Carbon::now()->addDays()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('admin/order');
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
    public function DeleteArticle($id)
    {
        $obj = Order::find($id);
        if ($obj == null) {
            return view('error/error-404');
        }
        $obj->status = 'chưa duyệt';
        $obj->save();
    }
}
