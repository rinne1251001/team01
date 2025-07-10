@extends('layouts.app')

@section('content')
    <div id="removing" class="btn-group-x">
        <x-create-button :image="basename($image)" />
        <x-dressup-button :image="$image" />
    </div>

    <div id="question" class="question">どのごはんをあげる？</div>
    <div><img src="/images/brown4.png" alt="たぬき"></div>
    <div id="removing2">
        <a class="btn btn-yellow" href="/fox">きいろのごはん</a>
        <a class="btn btn-brown" href="/bear">ちゃいろのごはん</a>
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
                "/fox"
            ];

            setTimeout(() => {
                const randomPage = pages[Math.floor(Math.random() * pages.length)];
                window.location.href = randomPage;
            }, 1500);
        }
    </script>

@endsection