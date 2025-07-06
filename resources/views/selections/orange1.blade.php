@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/orange1.png" alt="赤玉"></div>
    <div>
        <a class="btn btn-yellow" href="/chick">きいろのごはん</a>
        <a class="btn btn-orange" href="/boiledegg">オレンジのごはん</a>
    </div>
@endsection