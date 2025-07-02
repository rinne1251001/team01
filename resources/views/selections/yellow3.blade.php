@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow3.png" alt="たまご"></div>
    <div>
        <a class="btn" href="/chick">きいろのごはん</a>
        <a class="btn" href="/brownegg">オレンジのごはん</a>
        <a class="btn" href="/misterious">にじいろのごはん</a>
    </div>
@endsection