@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/rainbow1.png" alt="なぞのたまご"></div>
    <div>
        <a class="btn" href="/chicken">きいろのごはん</a>
    </div>
@endsection