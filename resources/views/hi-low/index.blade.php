@extends('layouts.default')

@section('title', 'ハイアンドロー予想画面')
@section('content')
    <p>ディーラのカードは...『{{ $dealersNumber }}』</p>
    <form method="POST" action="{{ route('hi-low') }}">
        @csrf
        {{-- <input type="hidden" name="dealersNumber" value="{{ $dealersNumber }}" /> hidden属性はダメ --}}
        <button type="submit" name="guess" value="high">自分のカードが大きい</button>
        <button type="submit" name="guess" value="low">自分のカードが同じか小さい</button>
    </form>
@endsection