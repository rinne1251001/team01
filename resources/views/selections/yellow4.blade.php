@extends('layouts.app')

@section('content')
<x-create-button :image="$image" />
    <div class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow4.png" alt="りゅう"></div>
    <div>
       <a class="btn" href="/">さいしょにもどる</a>
    </div>
@endsection