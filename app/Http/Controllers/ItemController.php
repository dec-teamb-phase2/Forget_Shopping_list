<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Item;
use Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::getAllOrderByUpdated_at();
        return view('item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'item_name' => 'required',
            'item_price' => 'required',
            ]);
          // バリデーション:エラー
            if ($validator->fails()) {
            return redirect()
                ->route('item.create')
                ->withInput()
                ->withErrors($validator);
            }
          // create()は最初から用意されている関数
          // 戻り値は挿入されたレコードの情報
        //   $result = Item::create($request->all());
        $data = $request->merge(['user_id' => Auth::user()->id])->all();
        $result = Item::create($data);
          // ルーティング「todo.index」にリクエスト送信（一覧ページに移動）
            return redirect()->route('item.index');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $items = Item::getAllOrderByUpdated_at();
        return view('item.index',compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        return view('item.edit', compact('item'));
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
        $validator = Validator::make($request->all(), [
            'item_name' => 'required',
            'item_price' => 'required',
            ]);
          // バリデーション:エラー
            if ($validator->fails()) {
            return redirect()
                ->route('item.edit', $id)
                ->withInput()
                ->withErrors($validator);
            }
          // create()は最初から用意されている関数
          // 戻り値は挿入されたレコードの情報
        //   $result = Item::create($request->all());
        // $data = $request->merge(['user_id' => Auth::user()->id])->all();
        $result = Item::find($id)->update($request->all());
          // ルーティング「todo.index」にリクエスト送信（一覧ページに移動）
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ddd(Item::find($id));
        $result = Item::find($id)->delete();
        return redirect()->route('item.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id){
        $result = Item::onlyTrashed()->get();
        // ddd($result->find($id));
        $result = $result->find($id)->restore();
        return redirect()->route('item.reconstruct');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recon()
    {
        // $items = Item::getAllOrderByUpdated_at();
        $items = Item::onlyTrashed()->get();
        // ddd($items);
        return view('item.reconstruct',compact('items'));
    }
}
