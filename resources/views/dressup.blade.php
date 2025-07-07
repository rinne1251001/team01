@extends('layouts.app')

@section('content')

    <div class="dressup-container">
        <img class="animal-img" src="{{ asset($image) }}">
        <img id="dressupitem" class="dressup-img" src="/images/clothes/ribbon.png" alt="着せ替えアイテム">
    </div>

    <div class="btn-group">
    <input type="radio" name="item" id="ribbon" onclick="ribbon()" checked><label for="ribbon" class="btn">リボン</label>
    <input type="radio" name="item" id="necktie" onclick="necktie()"><label for="necktie" class="btn">ネクタイ</label>
    </div>

    <script>
        var img;
        function ribbon() {
            const img = document.getElementById("dressupitem");
            img.src = "/images/clothes/ribbon.png";
        }

        function necktie() {
            const img = document.getElementById("dressupitem");
            img.src = "/images/clothes/necktie.png";
        }
    </script>

@endsection