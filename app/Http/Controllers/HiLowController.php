<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiLowController extends Controller
{
    public function index() {
        $dealersNumber = random_int(1, 12);
        //セッションに保存する
        session()->put('dealersNumber', $dealersNumber);

        //予想画面を表示
        return view('hi-low.index', ['dealersNumber' => $dealersNumber]);
    }

    public function result(Request $request) {
        // ディーラーの数字(hidden値で送信されたもの)を取得:HTMLで書き換えさせないため
        // $dealersNumber = $request->get('dealersNumber');

        // セッションから取得する
        $dealersNumber = session()->get('dealersNumber');

        // プレイヤーの数字を1~12の中からランダムに取得
        $playersNumber = random_int(1, 12);
        // プレーヤーの数字がディーラーのものより大きいか判定(大きい場合にtrue)
        $isHigh = $playersNumber > $dealersNumber;
        // 予想が当たったかの判定：結果画面を表示
        $isCorrect = ($isHigh && $request->get('guess') === 'high') || (!$isHigh && $request->get('guess') === 'low');
        return view('hi-low.result', [
            'dealersNumber' => $dealersNumber,
            'playersNumber' => $playersNumber,
            'isCorrect' => $isCorrect,
        ]);
    }
}