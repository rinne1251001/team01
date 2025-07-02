@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/orange1.png" alt="赤玉"></div>
    <div>
        <a class="btn" href="/chick">きいろのごはん</a>
    </div>
@endsection