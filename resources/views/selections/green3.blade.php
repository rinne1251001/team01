@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/green3.png" alt="へび"></div>
    <div>
        <a class="btn btn-yellow" href="/egg">きいろのごはん</a>
        <a class="btn btn-green" href="/amphisbaena">みどりのごはん</a>
    </div>
@endsection