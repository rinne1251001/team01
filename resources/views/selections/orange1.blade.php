@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/orange1.png" alt="赤玉"></div>
    <div>
        <a class="btn btn-yellow" href="/chick">きいろのごはん</a>
        <a class="btn btn-orange" href="/boiledegg">オレンジのごはん</a>
    </div>
@endsection