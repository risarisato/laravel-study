{{-- 継承させる --}}
@extends('layouts.default')

{{-- @sectionは子ビュー --}}
@section('title', 'ここはGETフォームです')
@section('content')
    <form action="/query-strings" method="GET">
        <label>キーワード：<input type="text" name="keyword"></label>
        <button type="submit">検索</button>
    </form>
@endsection