@extends('layouts.app')
@section('content')
@include('commons.errors')
<main>
    <form action="{{ route('collections.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <img src="{{ asset('images/' . $image) }}">
            <input type="hidden" name="image" value="{{ basename($image) }}">
        </div>
        <div class="form-group">
            <label for="name">なまえをつけてね</label>
            <input type="text" name="name" class="form-design" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="memo">メモ</label>
            <textarea name="memo" class="form-design">{{ old('memo') }}</textarea>
        </div>
        
        <input type="submit" value="登録" class="btn">
        <input type="reset" value="クリア" class="btn">
        <a href="{{ url()->previous() }}" class="btn">もどる</a>
    </form>
</main>
@endsection