@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow3.png" alt="たまご"></div>
    <div>
        <a class="btn btn-yellow" href="/chick">きいろのごはん</a>
        <a class="btn btn-orange" href="/brownegg">オレンジのごはん</a>
        <a class="btn btn-rainbow" href="/misterious">にじいろのごはん</a>
    </div>
@endsection