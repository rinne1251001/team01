@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/green4.png" alt="あんふぃすばえな"></div>
    <div>
        <a class="btn btn-green" href="/yamatanoorochi">みどりのごはん</a>
    </div>
@endsection