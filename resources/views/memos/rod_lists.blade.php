<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>登録ロッド一覧</h1>
        <h2>[<a href='/rods/rod_create'>新規登録</a>]</h2>
        <div class='rods'>
            @foreach ($rods as $rod)
            <div class='rod_lists'>
            <p class='rod_name'><a href="/rods/{{ $rod->id }}">{{ $rod->rod_name }}</a></p>
            </div>
            <div class="card-footer text-right">
            　[<a href="/rods/{{ $rod->id }}/edit">編集</a>]
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$rods->links()}}
        </div>
    </body>
</html>