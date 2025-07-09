@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/pink2.png" alt="こぶた"></div>
    <div>
        <a class="btn btn-brown" href="/raccondog">ちゃいろのごはん</a>
    </div>
@endsection