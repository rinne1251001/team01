@extends('layouts.app')

@section('content')
<main>
    <div>

        <div class="show-grid">
            <div class="left">
                <img src="/images/{{ $collection->image }}" alt="{{ $collection->name }}">
                <div class="row"><span class="label">名前</span><span class="name-box">{{ $collection->name }}</span></div>
            </div>

            <div class="right">
                <div class="row"><span class="label">登録日</span><span class="date-box">{{ $collection->created_at->format('Y年m月d日 H:i') }}</span></div>
                <p style="font-weight: bolder; ">メモ</p>
                <div class="memo-box">{!! nl2br(e($collection->memo)) !!}</div>
            </div>

            <div class="under">
                <div class="btn-group">
                    <a href="{{ route('collections.edit', $collection) }}" class="btn">編集</a>
                    <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('collections.destroy', $collection) }}" method="post">
                        @csrf 
                        @method('delete')
                        <input type="submit" value="削除" class="btn">
                    </form>
                    <a href="{{ route('collections.index') }}" class="btn">もどる</a>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection