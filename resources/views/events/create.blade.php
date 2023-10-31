@extends('layouts.default')

@section('title', 'イベント登録')
@section('content')
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div><label>イベント名: <input type="text" name="title"></label></div>
        <div><button type="submit">登録する</button></div>
    </form>
@endsection

{{-- http://localhost/events/create みているところ --}}