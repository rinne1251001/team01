@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="grid-container">
            @foreach ($collections as $collection)
            <article class="collection-item">
                <a href="{{ route('collections.show', $collection->id) }}">
                    <img class="collection-img" src="{{ asset('images/' . ($collection->image ?? 'default.jpg')) }}" alt="{{ $collection->name }}">
                </a>
                <div>{{ $collection->name }}</div>
            </article>
            @endforeach
        </div>
    </main>
@endsection