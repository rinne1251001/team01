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
            <input type="text" name="name" value="{{ old('name', $collection->name) }}">
        </div>
        <div class="form-group">
            <label for="memo">メモ</label>
            <textarea name="memo" rows="4" cols="40">{{ old('memo', $collection->memo) }}</textarea>
        </div>
        
        <input type="submit" value="更新" class="btn">
        <input type="reset" value="クリア" class="btn">
        <a href="{{ route('collections.show', $collection->id) }}" class="btn">もどる</a>
    </form>
</main>
@endsection