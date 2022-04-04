<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
    </head>
    <body>
            <h1>編集画面</h1>
    <div class="body">
        <form action="/reels/{{ $reel->id }}" method="POST">
            @csrf
            @method('PUT')
        <div class='cantent_reel'>
        <input type='text' name='reel[reel_name]' value="{{ $reel->reel_name }}">
        </div>
　　</div>
        <input type="submit" value="編集完了"/>
        </form>
        <div class="back">[<a href="/reels">戻る</a>]</div>
    </body>
</html>
