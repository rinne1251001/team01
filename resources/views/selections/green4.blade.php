@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/green4.png" alt="あんふぃすばえな"></div>
    <div>
        <a class="btn btn-green" href="/yamatanoorochi">みどりのごはん</a>
        <a class="btn btn-gold" href="/ryu">きんいろのごはん</a>
    </div>
@endsection