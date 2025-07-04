@extends('layouts.app')

@section('content')
    <div class=question>どのごはんをあげる？</div>
    <div><img src="/images/start.png" alt="はじめ"></div>
    <div>
        <a class="btn btn-yellow" href="/chick">きいろのごはん</a>
        <a class="btn btn-green" href="/tadpole">みどりのごはん</a>
        <a class="btn btn-brown" href="/boarlest">ちゃいろのごはん</a>
    </div>
@endsection