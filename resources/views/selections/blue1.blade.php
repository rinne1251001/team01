@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/blue1.png" alt="こどもドラゴン"></div>
    <div>
        <a class="btn btn-blue" href="/dragon">あおいろのごはん</a>
    </div>
@endsection