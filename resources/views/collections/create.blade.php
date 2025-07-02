@extends('layouts.app')
@section('content')
<main class="container">
    <form action="{{ route('collections.store') }}" method="POST">
        @csrf
        <label for="name">名前:</label>
        <input type="text" name="name">
        <input type="hidden" name="image" value="{{ $image }}">
        <button type="submit">登録</button>
        <a href="{{ route('collections.index') }}">キャンセル</a>
    </form>
</main>
@endsection