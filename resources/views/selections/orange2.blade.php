@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/orange2.png" alt="煮卵"></div>
    <div>
        <a class="btn btn-orange" href="/omeletrice">オレンジのごはん</a>
    </div>
@endsection