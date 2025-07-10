<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <h1>育成game</h1>
        <nav>
            <ul>
                <li><a href="/">そだてる</a></li>
                <li><a href="/collections">ひろば</a></li>
                <li><a href="/howtoplay">あそびかた</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        &copy; Team NoPlan
    </footer>
</body>
</html>