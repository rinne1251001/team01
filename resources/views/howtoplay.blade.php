@extends('layouts.app')

@section('content')

<nav class="howto">
    <ul>
        <li>
            <a href="#breeding" class="nav-item">
                <img src="/images/yellow1.png">
                <div class="line"></div>
                <span>そだてる</span>
            </a>
        </li>
        <li>
            <a href="#collection" class="nav-item">
                <img src="/images/howtoplay/collection.png">
                <div class="line"></div>
                <span>ひろば</span>
            </a>
        </li>
        <li>
            <a href="#dressup" class="nav-item">
                <img src="/images/howtoplay/dressup.png">
                <div class="line"></div>
                <span>きせかえ</span>
            </a>
        </li>
    </ul>
</nav>

<section>
    <h2 id="breeding">そだてる</h2>
    <div class="howto-grid">
        <img src="/images/howtoplay/breeding.gif">
        <p>
            あげたいごはんを選んでキャラクターを育てよう<br>
            キャラクターは全３５種類<br>
            全部見つけられるかな？
        </p>
    </div>
</section>

<section>
    <h2 id="collection">ひろば</h2>
    <div class="howto-grid">
        <img src="/images/howtoplay/collection.gif">
        <p>
            育てたキャラクターはひろばに連れて行こう<br>
            なまえ・メモを書いて登録を押すと連れていけるよ
        </p>
    </div>
    <div class="howto-grid">
        <img src="/images/howtoplay/collection2.gif">
        <p>
            登録したキャラクターは<br>
            右上の「ひろば」から見れるよ
        </p>
    </div>
</section>

<section>
    <h2 id="dressup">きせかえ</h2>
    <div class="howto-grid">
        <img src="/images/howtoplay/dressup.gif">
        <p>
            着せ替えも楽しめるよ<br>
            ボタンでアイテムを選んで十字パッドで調節しよう
        </p>
    </div>
</section>

@endsection