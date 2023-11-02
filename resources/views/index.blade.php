{{-- 継承させる --}}
@extends('layouts.default')

{{-- @sectionは子ビュー --}}
@section('title', 'さぁ、はじめよう！')
@section('content')
    <p>
        Larabelの学習をはじめての方をサポートする学習サイトです。<br>
        このサイトでは、Larabelの基礎だけでなく開発環境構築やデータベースに関しても解説します<br>
        これから学習をはじめるにあたり、まずは下記の内容をご確認ください。<br>
        ~~~~~~ 以下省略 ~~~~~~
    </p>
    <h3><a href="{{ url('/') }}">topページ</a></h3>
    <h3><a href="{{ url('/curriculum') }}">curriculumページ</a></h3>
    <h3><a href="{{ url('/hello_world') }}">hello_worldページ</a></h3>
    <h3><a href="{{ url('/hello_world_fn') }}">hello_world_fnページ</a></h3>
    <h3><a href="{{ url('/world-time') }}">world-timeページ</a></h3>
    <h3><a href="{{ url('/omikuji') }}">omikujiページ</a></h3>
    <h3><a href="{{ url('/monty-hall') }}">monty-hallページ</a></h3>
    <h3><a href="{{ url('/events/create') }}">events/createページ</a></h3>
    <h3><a href="{{ url('/hi-low') }}">hi-lowページ</a></h3>
@endsection
