<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // ログに出力する
//use App\Models\Event;まだ、DBは使わない

// web.phpの7ルートを1つにまとめる「resource」メソッドから生成されるルート
//Route::resource('events', EventController::class);

class EventController extends Controller
{
    public function index()
    {
        // Show all events
    }

    // 登録画面表示用
    public function create()
    {
        return view('events.create');
    }

    // ログに出力する
    // storage\logs\laravel.logに出力される
    public function store(Request $request)
    {
        $title = $request->get('title');
        Log::debug(message: 'イベント名：' . $title);
        return to_route('events.create')->with('success', $title. 'を登録しました。');
    }
    //return redirect('events.create');と同じらしい
    /*
    return view('events.create');はダメ！！！更新すると同じ処理をしてしまう！
    検索しているページは、入力した情報を使用しています。
    このページに戻った場合、操作のやり直しが発生する可能性があります。続行しますか？
    */

    public function show(Event $event)
    {
        // Show a single event
    }

    public function edit(Event $event)
    {
        // Show the form for editing a specific event
    }

    public function update(Request $request, Event $event)
    {
        // Update a specific event in the database
    }

    public function destroy(Event $event)
    {
        // Delete a specific event from the database
    }
}
