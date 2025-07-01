@extends('layouts.app')

@section('content')
    <main class="container">
        @foreach ($collections as $collection)
        <article class="collection-item">
            <div><img src="{{ asset('images/' . ($images[$collection->id] ?? 'default.jpg')) }}" alt="{{ $collection->name }}"></div>
            <div class="collection-name">{{ $collection->name }}</div>
        </article>
        @endforeach
    </main>
@endsection