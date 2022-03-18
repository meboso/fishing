<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ロッド詳細</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="rod_name">{{ $rod->rod_name }}</h1>
        
         <div class="footer">
            <a href="/rod">一覧へ戻る</a>
        </div>
    </body>
</html>