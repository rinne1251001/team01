@extends('layouts.app')
@section('content')

<main>
    <form id="collectionForm" action="{{ route('collections.store') }}" method="POST">
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
            <input type="text" name="name" class="form-design @error('name') is-invalid @enderror" value="{{ old('name') }}">
            @error('name')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="memo">メモ</label>
            <textarea name="memo" class="form-design @error('name') is-invalid @enderror">{{ old('memo') }}</textarea>
            @error('memo')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="btn-group">
            <input type="submit" value="登録" class="btn">
            <input type="reset" value="クリア" class="btn">
            <input type="button" class="btn" onclick="history.back()" value="もどる">
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