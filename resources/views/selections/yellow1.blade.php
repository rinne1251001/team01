@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow1.png" alt="ひよこ"></div>
    <div>
        <a class="btn btn-yellow" href="/chicken">きいろのごはん</a>
        <a class="btn btn-green" href="/snake">みどりのごはん</a>
        <a class="btn btn-brown" href="/boar">ちゃいろのごはん</a>
    </div>
@endsection