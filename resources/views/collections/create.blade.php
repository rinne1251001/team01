@extends('layouts.app')
@section('content')
<main class="container">
    <form action="{{ route('collections.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <img src="/images/{{ $image }}">
            <input type="hidden" name="image" value="{{ $image }}">
        </div>
        <div class="form-group">
            <label for="name">なまえをつけてね</label>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <label for="memo">メモ</label>
            <textarea name="memo" rows="4" cols="40"></textarea>
        </div>
        
        <input type="submit" value="登録" class="btn">
        <input type="reset" value="クリア" class="btn">
        <a href="{{ route('collections.index') }}" class="btn">もどる</a>
    </form>
</main>
@endsection