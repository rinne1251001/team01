@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/brown1.png" alt="うりぼう"></div>
    <div>
        <a class="btn btn-yellow" href="/fox">きいろのごはん</a>
        <a class="btn btn-green" href="/snake">みどりのごはん</a>
        <a class="btn btn-brown" href="/boar">ちゃいろのごはん</a>
    </div>
@endsection