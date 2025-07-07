@extends('layouts.app')

@section('content')

    <div class="dressup-container">
        <img class="animal-img" src="/images/yellow1.png">
        <img id="dressupitem" class="dressup-img" src="/images/ribbon.png" alt="着せ替えアイテム">
    </div>

    <div class="btn-group">
    <input type="button" class="btn" onclick="ribbon()" value="リボン">
    <input type="button" class="btn" onclick="necktie()" value="ネクタイ">
    </div>

    <script>
        var img;
        function ribbon() {
            const img = document.getElementById("dressupitem");
            img.src = "/images/ribbon.png";
        }

        function necktie() {
            const img = document.getElementById("dressupitem");
            img.src = "/images/necktie.png";
        }
    </script>

@endsection