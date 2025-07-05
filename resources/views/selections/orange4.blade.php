@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="adult">成長！</div>
    <div><img src="/images/orange4.png" alt="焼き鳥"></div>
    <div>
        <a class="btn" href="/">さいしょにもどる</a>
    </div>
@endsection