@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/green1.png" alt="おたまじゃくし"></div>
    <div>
        <a class="btn" href="/chicken">きいろのごはん</a>
        <a class="btn" href="/frog">みどりのごはん</a>
        <a class="btn" href="/boar">ちゃいろのごはん</a>
    </div>
@endsection