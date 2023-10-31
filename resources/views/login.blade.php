@extends('layouts.default')

{{-- @sectionは子ビュー --}}
@section('title', 'ログイン')
@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf {{-- セキュリティ対策laravelではget以外は自動にcsrf対策される --}}
        <div><label>メールアドレス: <input type="text" name="email"></label></div>
        <div><label>パスワード: <input type="password" name="password"></label></div>
        <div><input type="submit" value="ログイン"></div>
</form>{{-- タイポ注意fromは間違え! --}}
@endsection

