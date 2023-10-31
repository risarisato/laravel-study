<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RequestSampleController extends Controller
{
    public function queryStrings(Request $request)
    {
        // $keyword = $request->keyword;
        // 未送信ではなく、未入力の場合は初期値は使用されない
        $keyword = $request->get(key:'keyword', default:'未設定');
        return 'キーワードは「' . $keyword . '」です。';
    }

    // ルートパラメーターの例：/route-parameters/{id:1}など
    public function profile($id)
    {
        return '私のIDは' . $id . 'です。';
    }

    // 複数のルートパラメーターの例
    // タイポReuqest >> Request
    public function productsArchive(Request $request, $category, $year)
    {
        return 'category: ' . $category. '<br>year: ' . $year . '<br> page: '. $request->get(key:'page', default:1);
    }

    // 名前付きルート:view側でroute関数を使うことで、URLを変更しても、リンク先を変更しなくても良くなる
    public function routeLink()
    {
        //route関数の第一引数には、ルート名を指定する
        $url = route('profile', ['id' => 1, 'photo' => 'yes']);
        return 'プロフィールページURLは' . $url . 'です。';
    }

    // ログインformを表示
    public function form()
    {
        return view(view: 'form');
    }

    // ログイン処理作成
    public function loginForm()
    {
        return view(view: 'login');
    }

    // ログイン処理の結果を表示
    public function login(Request $request)
    {
        if ($request->get( key: 'email') === 'user@example.com' && $request->get(key: 'password') === '12345678') {
            return 'ログイン成功しました。';
        }
        return 'ログイン失敗です。';
    }
}