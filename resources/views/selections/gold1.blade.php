@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="adult">成長！</div>
    <div><img src="/images/gold1.png" alt="りゅう"></div>
    <div>
        <a class="btn" href="/">さいしょにもどる</a>
    </div>
@endsection