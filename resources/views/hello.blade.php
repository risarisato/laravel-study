@extends('layouts.default')

@section('title', 'さぁ、はじめよう！')
@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>hello_world</title>
</head>
<body>
    <h1>こんにちは{{ $name }}さん</h1>
    <h1>本コースでは、{{ $course }}を学習します。</h1>
    <p style ="color : red">これは赤文字です、HTMLで表示しています。</p>
</body>
</html>