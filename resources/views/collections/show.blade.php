@extends('layouts.app')

@section('content')
<main class="container">
    <div>
        <div class="form-group">
            <img src="/images/{{ $collection->image }}" alt="{{ $collection->name }}">
        </div>

        名前
        <div class="form-group">
            <h2>{{ $collection->name }}</h2>
        </div>

        <div class="form-group">
            <p>登録日：{{ $collection->created_at->format('Y年m月d日 H:i') }}</p>
        </div>

        メモ
        <div class="form-group">
            {!! nl2br(e($collection->memo)) !!}
        </div>

        <a href="{{ route('collections.edit', $collection) }}" class="btn">編集</a>
        <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('collections.destroy', $collection) }}" method="post">
            @csrf 
            @method('delete')
            <input type="submit" value="削除" class="btn">
        </form>
        <a href="{{ route('collections.index') }}" class="btn">もどる</a>
    </div>
</main>
@endsection