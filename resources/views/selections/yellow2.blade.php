@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow2.png" alt="にわとり"></div>
    <div>
        <a class="btn" href="/egg">きいろのごはん</a>
        <a class="btn" href="/snake">みどりのごはん</a>
    </div>
@endsection