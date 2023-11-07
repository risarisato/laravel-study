@extends('layouts.default')

@section('title', '写真投稿')
@section('content')
    @if(session()->has('success'))
       <p>{{ session('success') }}</p>
    @endif
   <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label>写真:<input type="file" name="image"></label>
        <button type="submit">投稿する</button>
    </div>
    </form>
@endsection