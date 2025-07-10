@extends('layouts.app')

@section('content')
    <div id="removing" class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div id="question" class="question">どのごはんをあげる？</div>
    <div><img src="/images/yellow4.png" alt="きつね"></div>
    <div id="removing2">
        <a class="btn btn-yellow" href="/cat">きいろのごはん</a>
        <a class="btn btn-rainbow" onclick="randomClick()" href="javascript:void(0)">にじいろのごはん</a>
    </div>

    <script>
        function randomClick() {
            document.querySelector('img').src = "/images/start.gif";
            document.getElementById('question').textContent = "変身中...";
            document.getElementById('removing').style.display = "none";
            document.getElementById('removing2').style.display = "none";

            const pages = [
                "/",
                "/chick",
                "/misterious",
                "/dokuchu",
                "/babydragon",
                "/raccondog"
            ];

            setTimeout(() => {
                const randomPage = pages[Math.floor(Math.random() * pages.length)];
                window.location.href = randomPage;
            }, 1500);
        }
    </script>

@endsection