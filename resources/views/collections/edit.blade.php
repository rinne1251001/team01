@extends('layouts.app')
@section('content')
@include('commons.errors')
<main>
    <form action="{{ route('collections.update', $collection->id) }}" method="POST">
        @method('patch')
        @csrf

        <div class="form-group">
            <img src="/images/{{ $collection->image }}">
            <input type="hidden" name="image" value="{{ $collection->image }}">
        </div>
        <div class="form-group">
            <label for="name">なまえをつけてね</label>
            <input type="text" name="name" class="form-design" value="{{ old('name', $collection->name) }}">
        </div>
        <div class="form-group">
            <label for="memo">メモ</label>
            <textarea name="memo" class="form-design">{{ old('memo', $collection->memo) }}</textarea>
        </div>
        
        <div class="btn-group">
            <input type="submit" value="更新" class="btn">
            <input type="reset" value="クリア" class="btn">
            <a href="{{ route('collections.show', $collection->id) }}" class="btn">もどる</a>
        </div>
    </form>
</main>
@endsection