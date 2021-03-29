<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemosController extends Controller
{
    
    //表示
    public function index(){
        $memos = Memo::orderBy('created_at','DESC')->get();

        return view('index',['memos' => $memos]);
    }

    //作成画面表示
    public function create(){
        return view('create');
    }

    //作成処理
    public function store(Request $request){
        $content = $request->validate([
            'content' => 'required'
        ]);

        Memo::create($content);
        return redirect()->route('index');
    }

    //編集画面表示
    public function edit(Request $request){
        $memo = Memo::find($request->id);

        return view('edit',['memo' => $memo]);
    }

    //編集処理
    public function update(Request $request){
        $memo = Memo::find($request->id);
        $content = $request->validate([
            'content' => 'required',
        ]);

        $memo->fill($content)->save();
        return redirect()->route('index');
    }

    //削除処理
    public function delete(Request $request){

        $memo = Memo::find($request->id);
        $memo->delete();
        return redirect()->route('index');
    }
}
