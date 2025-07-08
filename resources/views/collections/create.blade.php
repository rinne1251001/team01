@extends('layouts.app')
@section('content')
@include('commons.errors')
<main>
    <form action="{{ route('collections.store') }}" method="POST">
        @csrf

        <div class="form-group">
            @if(request('imageData'))
                <img src="{{ request('imageData') }}">
                <input type="hidden" name="imageData" value="{{ request('imageData') }}">
            @elseif(!empty($image))
                <img src="{{ asset('images/' . $image) }}">
                <input type="hidden" name="image" value="{{ basename($image) }}">
            @endif
        </div>
        <div class="form-group">
            <label for="name">なまえをつけてね</label>
            <input type="text" name="name" class="form-design" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="memo">メモ</label>
            <textarea name="memo" class="form-design">{{ old('memo') }}</textarea>
        </div>
        
        <div class="btn-group">
            <input type="submit" value="登録" class="btn">
            <input type="reset" value="クリア" class="btn">
            <a href="{{ url()->previous() }}" class="btn">もどる</a>
        </div>
    </form>
</main>
@endsection