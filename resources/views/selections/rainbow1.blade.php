@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/rainbow1.png" alt="なぞのたまご"></div>
    <div>
        <a class="btn btn-blue" href="/babydragon">あおいろのごはん</a>
        <a class="btn btn-pink" href="/rabbit">ピンクのごはん</a>
        <a class="btn btn-rainbow" href="/dokuchu">にじいろのごはん</a>
        <a class="btn btn-yellow" href="/dog">きいろのごはん</a>
    </div>
@endsection