<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="reel_name">{{ $reel->reel_name }}</h1>
         <div class="footer">
            <a href="/reel">一覧へ戻る</a>
        </div>
    </body>
</html>