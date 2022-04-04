<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
    </head>
    <body>
            <h1>編集画面</h1>
    <div class="body">
        <form action="/lures/{{ $lure->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='cantent_rod'>
                <input type='text' name='lure[lure_name]' value="{{ $lure->lure_name }}">
            </div>
　　</div>
            <input type="submit" value="編集完了"/>
        </form>
        <div class="back">[<a href="/lures">戻る</a>]</div>
    </body>
</html>