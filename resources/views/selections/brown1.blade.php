@extends('layouts.app')

@section('content')
<form action="{{ route('collections.store') }}" method="POST">
    @csrf
    <input type="hidden" name="name" value="おたまじゃくし">
    <input type="hidden" name="image" value="green1.png">
    <button type="submit">登録</button>
</form>
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/brown1.png" alt="うりぼう"></div>
    <div>
        <a class="btn" href="/chicken">きいろのごはん</a>
        <a class="btn" href="/frog">みどりのごはん</a>
        <a class="btn" href="/boar">ちゃいろのごはん</a>
    </div>
@endsection