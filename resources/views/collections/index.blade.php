@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="grid-container">
            @foreach ($collections as $collection)
            <article class="collection-item">
                <img class="collection-img" src="{{ asset('images/' . ($collection->image ?? 'default.jpg')) }}" alt="{{ $collection->name }}">
                <div>{{ $collection->name }}</div>
            </article>
            @endforeach
        </div>
    </main>
@endsection