@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/rainbow1.png" alt="なぞのたまご"></div>
    <div>
        <a class="btn btn-blue" href="/babydragon">あおいろのごはん</a>
        <a class="btn btn-white" href="/rabbit">しろいろのごはん</a>
        <a class="btn btn-rainbow" href="/dokuchu">にじいろのごはん</a>
        <a class="btn btn-rainbow" href="/dog">にじいろのごはん</a>
    </div>
@endsection