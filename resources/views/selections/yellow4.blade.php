@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow4.png" alt="きつね"></div>
    <div>
        <a class="btn btn-brown" href="/raccondog">ちゃいろのごはん</a>
        <a class="btn btn-rainbow" href="/misterious">にじいろのごはん</a>
    </div>
@endsection