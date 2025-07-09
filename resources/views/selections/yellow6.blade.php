@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow6.png" alt="ねこ"></div>
    <div>
        <a class="btn btn-pink" href="/piglet">ピンクのごはん</a>
    </div>
@endsection