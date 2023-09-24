<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//class UtilityController extends Controllers タイプミス
class UtilityController extends Controller
{
    // 世界時刻を表示する>>ルーティングのアクションメソッドをコントローラに移動
    public function worldTime()
    {
        $timeDiff = [
            '東京' => 0,
            'シンガポール' => -1,
            'パリ' => -8,
            'ロンドン' => -9,
            'ニューヨーク' => -14,
            'ロサンゼルス' => -17,
            'ハワイ' => -19,
        ];
        $times = array_map(fn($diff) => now()->addHours($diff), $timeDiff);
        return view('world-time', ['times' => $times]);
    }
}