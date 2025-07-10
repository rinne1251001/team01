@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/blue3.png" alt="かめ"></div>
    <div>
        <a class="btn btn-blue" href="/kappa">あおいろのごはん</a>
    </div>
@endsection