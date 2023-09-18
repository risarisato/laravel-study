<?php

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

Route::get('/', function () {
    return view('welcome');
});

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
</body>
</html>
');

