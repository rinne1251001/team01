@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow2.png" alt="にわとり"></div>
    <div>
        <a class="btn btn-yellow" href="/egg">きいろのごはん</a>
        <a class="btn btn-green" href="/snake">みどりのごはん</a>
        <a class="btn btn-orange" href="/skeweredchicken">オレンジのごはん</a>
    </div>
@endsection