<?php

// インポートして、短く書く
use App\Http\Controllers\GameController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\RequestSampleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

# Topページを表示する
Route::get('/' , fn () => view(view: 'index'));

# curriculumページを表示する
Route::get('/curriculum' , fn () => view(view: 'curriculum'));


# hello_worldを表示する①
Route::get('/hello', fn() => view('hello',  [
    'name' => '山田太郎',
    'course' => '初めてのLaravel'
]));

# hello_worldを表示する②
Route::get('/hello_world' , fn () => view(view: 'hello_world')); # htmlではなく文字列を返す

# hello_worldを表示する③
Route::get('/hello_world_fn' , fn () => '<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>初めてのページ</title>
</head>
<body>
    <h1>こんにちは</h1>
    <p>これは、HTMLを表示しています。</p>
    <p>web.phpに直接記述しています</p>
</body>
</html>
');

// 世界の時間
// Route::get('/world-time', [App\Http\Controllers\UtilityController::class, 'worldTime']);
// インポートしないと上記にように長く記載しないといけない
Route::get('/world-time', [UtilityController::class, 'worldTime']);
    //下記をコントローラに移動した
    //$timeDiff = [
    //    '東京' => 0,
    //    'シンガポール' => -1,
    //    'パリ' => -8,
    //    'ロンドン' => -9,
    //    'ニューヨーク' => -14,
    //    'ロサンゼルス' => -17,
    //    'ハワイ' => -19,
    //];
    //$times = array_map(fn($diff) => now()->addHours($diff), $timeDiff);
    //return view('world-time', ['times' => $times]);

// おみくじ
Route::get('/omikuji', [GameController::class, 'omikuji']);
// おみくじ
//Route::get('/omikuji', function () {
//    $fortunes = ['大吉', '中吉', '小吉', '吉', '末吉', '凶', '大凶'];
//    $resultIndex = array_rand($fortunes);
//    $result = $fortunes[$resultIndex];
//    return view('omikuji', ['result' => $result]);
//});

// モンティ・ホール問題
Route::get('/monty-hall', [GameController::class, 'montyhall']);
// モンティ・ホール問題
//Route::get('/monty-hall', function () {
//    $results = [];
//    for ($i = 0; $i < 100; $i++) {
//        $options = [true, false, false];
//        shuffle($options);
//
//        $selectedIndex = array_rand($options);
//        $notSelectedIndexes = array_filter($options, fn($index) => $index !== $selectedIndex, ARRAY_FILTER_USE_KEY);
//        $removeIndex = array_search(false, $notSelectedIndexes);
//        unset($notSelectedIndexes[$removeIndex]);
//
//        $changedIndex = key($notSelectedIndexes);
//        $results[] = $options[$changedIndex];
//    }
//    $wonCount = count(array_filter($results, fn($result) => $result));
//    return view('monty-hall', ['results' => $results, 'wonCount' => $wonCount]);

// type '/query-string'>>'/query-strings'と'queryString'＞'queryStrings'
Route::get('/query-strings', [RequestSampleController::class, 'queryStrings']);

// ルートパラメーターの例：/route-parameters/{id:1}など
Route::get('/users/{id}', [RequestSampleController::class, 'profile'])
    // 名前付きルート:view側でroute関数を使うことで、URLを変更しても、リンク先を変更しなくても良くなる
    ->name('profile');
Route::get('/route-Link', [RequestSampleController::class, 'routeLink']);

// 複数のルートパラメーターの例
Route::get('/products/{category}/{year}', [RequestSampleController::class, 'productsArchive']);

// リクエスト
Route::get('/form', [RequestSampleController::class, 'form']);

// ログイン
Route::get('/login', [RequestSampleController::class, 'loginForm']);

// ログイン処理＞＞パスワードのget送信はダメ！！
// ログイン処理：post
Route::post('/login', [RequestSampleController::class, 'login'])->name('login');

/*
// よくある7ルートの例
Route::get('/events', [EventController::class, 'index']);->name('events.index'); // 一覧表示
Route::get('/events/{event}', [EventController::class, 'show']);->name('events.show'); // 詳細表示
Route::get('/events/create', [EventController::class, 'create']);->name('events.create'); // 登録フォーム
Route::post('/events', [EventController::class, 'store']);->name('events.store'); // 登録処理
Route::get('/events/{event}/edit', [EventController::class, 'edit']);->name('events.edit'); // 更新フォーム
Route::match(['put', 'patch'], '/events/{event}', [EventController::class, 'update']);->name('events.update'); // 更新処理
Route::delete('/events/{event}', [EventController::class, 'destroy']);->name('events.destroy'); // 削除処理

// 指定したもの「only」
Route::resource('events', EventController::class)->only(['index', 'create', 'store']); // 一覧、登録フォーム、登録処理のみ

// 指定したものを除く「except」
Route::resource('events', EventController::class)->except(['edit', 'update', 'destroy']); // 更新フォーム、更新処理、削除処理を除く
*/
// インポートして、短く書く
use App\Http\Controllers\EventController;
// 7ルートを1つにまとめる「resource」メソッド
Route::resource('events', EventController::class);

// ハイローゲーム:インポートを忘れずに！
use App\Http\Controllers\HiLowController;
Route::get('/hi-low', [HiLowController::class, 'index'])->name('hi-low');
Route::post('/hi-low', [HiLowController::class, 'result']);

// ファイル管理
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class)->only(['create', 'store', 'show', 'destroy']);

// ダウンロード:resourceにはダウンロードが含まれてないので、追加する
Route::get('/photos/{photo}/download', [PhotoController::class, 'download'])->name('photos.download');