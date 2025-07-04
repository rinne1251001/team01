@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/orange2.png" alt="煮卵"></div>
    <div>
        <a class="btn btn-orange" href="/omeletrice">オレンジのごはん</a>
    </div>
@endsection