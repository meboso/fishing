<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
    </head>
    <body>
    <div class="body">
        <form action="/lures" method="POST">
            @csrf
                <h1>新規登録</h1>
                <textarea name="lure[lure_name]" placeholder="ルアー名、メーカーなど"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('lure.lure_name') }}</p>
    </div>
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/lures">戻る</a>]</div>
    </body>
</html>