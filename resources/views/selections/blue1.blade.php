@extends('layouts.app')

@section('content')
    <div class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/blue1.png" alt="こどもドラゴン"></div>
    <div>
        <a class="btn btn-blue" href="/dragon">あおいろのごはん</a>
    </div>
@endsection