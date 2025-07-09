@extends('layouts.app')
@section('content')

<main>
    <form id="collectionForm" action="{{ route('collections.update', $collection->id) }}" method="POST">
        @method('patch')
        @csrf

        <div class="form-group">
            <img src="/images/{{ $collection->image }}">
            <input type="hidden" name="image" value="{{ $collection->image }}">
        </div>
        <div class="form-group">
            <label for="name">なまえをつけてね</label>
            <input type="text" name="name" class="form-design @error('name') is-invalid @enderror" value="{{ old('name', $collection->name) }}">
            @error('name')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="memo">メモ</label>
            <textarea name="memo" class="form-design @error('name') is-invalid @enderror">{{ old('memo', $collection->memo) }}</textarea>
            @error('memo')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="btn-group">
            <input type="submit" value="更新" class="btn">
            <input type="reset" value="クリア" class="btn">
            <a href="{{ route('collections.show', $collection->id) }}" class="btn">もどる</a>
        </div>
    </form>
</main>

<script>
    document.getElementById("collectionForm").addEventListener("submit", function () {
        const name = document.getElementsByName("name")[0].value.trim();
        const memo = document.getElementsByName("memo")[0].value.trim();

        if (name === "" || memo === "") {
            let msg = "";
            if (name === "") msg += "なまえを入力してください。\n";
            if (memo === "") msg += "メモを入力してください。";
            alert(msg);
        }
    });
</script>

@endsection