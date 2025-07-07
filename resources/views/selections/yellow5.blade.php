@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="adult">成長！</div>
    <div><img src="/images/yellow5.png" alt="ワンちゃん"></div>
    <div>
        <a class="btn" href="/">さいしょにもどる</a>
    </div>
@endsection