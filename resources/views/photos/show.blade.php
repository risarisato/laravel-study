@extends('layouts.default')

@section('title', '写真の表示')
@section('content')
    @if(session()->has('success'))
       <p>{{ session('success') }}</p>
    @endif

    <img src="{{ asset('storage/photos/' . $fileName) }}" alt="">

    <form action="{{ route('photos.destroy', ['photo' => $fileName]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">削除する</button>
    </form>
    <a href="{{ route('photos.download', ['photo' => $fileName]) }}">ダウンロードする</a>
@endsection