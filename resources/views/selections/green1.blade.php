@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="{{ asset($image) }}" alt="おたまじゃくし"></div>
    <div>
        <a class="btn btn-yellow" href="/chicken">きいろのごはん</a>
        <a class="btn btn-green" href="/frog">みどりのごはん</a>
        <a class="btn btn-brown" href="/boar">ちゃいろのごはん</a>
    </div>
@endsection