@extends('layouts.app')

@section('content')

    <div class="dressup-container">
        <img class="animal-img" src="{{ asset($image) }}">
        <img id="dressupitem" class="dressup-img" src="/images/clothes/ribbon.png" alt="着せ替えアイテム">
    </div>

    <div class="btn-group">
    <input type="radio" name="item" id="ribbon" onclick="ribbon()" checked><label for="ribbon" class="btn">リボン</label>
    <input type="radio" name="item" id="necktie" onclick="necktie()"><label for="necktie" class="btn">ネクタイ</label>
    <input type="radio" name="item" id="crown" onclick="crown()"><label for="crown" class="btn">王冠</label>
    </div>

    <div class="arrow-pad">
        <div class="cross-layout">
            <input type="button" class="top-mark" onclick="moveUp()" value="▲">
            <input type="button" class="left-mark" onclick="moveLeft()" value="▲">
            <input type="button" class="center-mark" onclick="resetPositionAndSize()" value="●">
            <input type="button" class="right-mark" onclick="moveRight()" value="▲">
            <input type="button" class="bottom-mark" onclick="moveDown()" value="▲">
            <input type="button" class="small-mark" onclick="shrink()" value="－">
            <input type="button" class="big-mark" onclick="grow()" value="＋">
        </div>
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

        function crown() {
            const img = document.getElementById("dressupitem");
            img.src = "/images/clothes/crown.png";
        }

        let item = document.getElementById("dressupitem");
        let topPos = 0;
        let leftPos = 0;
        const step = 5;
        const minTop = -200;
        const maxTop = 200;
        const minLeft = -200;
        const maxLeft = 200;

        let currentScale = 1.0;
        const scaleStep = 0.1;
        const minScale = 0.5;
        const maxScale = 2.0;

        function updatePosition() {
            item.style.top = topPos + "px";
            item.style.left = leftPos + "px";
        }

        function updateScale() {
            item.style.transform = `scale(${currentScale})`;
        }

        function moveUp() {
            if (topPos - step >= minTop) {
                topPos -= step;
                updatePosition();
            }
        }

        function moveDown() {
            if (topPos + step <= maxTop) {
                topPos += step;
                updatePosition();
            }
        }

        function moveLeft() {
            if (leftPos - step >= minLeft) {
            leftPos -= step;
            updatePosition();
            }
        }

        function moveRight() {
            if (leftPos + step <= maxLeft) {
            leftPos += step;
            updatePosition();
            }
        }

        function grow() {
            if (currentScale < 2.0) {
                currentScale += 0.1;
                updateScale();
            }
        }

        function shrink() {
            if (currentScale > 0.5) {
                currentScale -= 0.1;
                updateScale();
            }
        }

        function resetPositionAndSize() {
            topPos = 0;
            leftPos = 0;
            currentScale = 1.0;
            updatePosition();
            updateScale();
        }
        
    </script>

@endsection