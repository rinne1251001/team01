@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/brown2.png" alt="いのしし"></div>
    <div>
        <a class="btn btn-brown" href="/bear">ちゃいろのごはん</a>
    </div>
@endsection