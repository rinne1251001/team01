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

        作成日
        <div class="form-group">
            <p>登録日：{{ $collection->created_at->format('Y年m月d日 H:i') }}</p>
        </div>

        メモ
        <div class="form-group">
            <p>{!! nl2br(e($collection->memo)) !!}</p>
        </div>

        戻るボタン
        <a href="{{ route('collections.index') }}" class="btn">もどる</a>
    </div>
</main>
@endsection