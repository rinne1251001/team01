@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow3.png" alt="たまご"></div>
    <div>
        <a class="btn btn-yellow" href="/chick">きいろのごはん</a>
        <a class="btn btn-orange" href="/brownegg">オレンジのごはん</a>
        <a class="btn btn-rainbow" href="/misterious">にじいろのごはん</a>
        <a class="btn btn-brown" href="/deer">ちゃいろのごはん</a>
    </div>
@endsection