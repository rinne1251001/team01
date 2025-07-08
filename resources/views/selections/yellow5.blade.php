@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>
    
    <div class="adult">成長！</div>
    <div><img src="/images/yellow5.png" alt="ワンちゃん"></div>
    <div>
        <a class="btn" href="/">さいしょにもどる</a>
    </div>
@endsection