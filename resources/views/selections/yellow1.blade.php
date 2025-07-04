@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow1.png" alt="ひよこ"></div>
    <div>
        <a class="btn btn-yellow" href="/chicken">きいろのごはん</a>
        <a class="btn btn-green" href="/frog">みどりのごはん</a>
        <a class="btn btn-brown" href="/boar">ちゃいろのごはん</a>
    </div>
@endsection