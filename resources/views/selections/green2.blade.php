@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/green2.png" alt="かえる"></div>
    <div>
        <a class="btn btn-yellow" href="/egg">きいろのごはん</a>
        <a class="btn btn-green" href="/snake">みどりのごはん</a>
    </div>
@endsection