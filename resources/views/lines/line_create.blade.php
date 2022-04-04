<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
    </head>
    <body>
            <div class="body">
        <form action="/lines" method="POST">
            @csrf
                <h1>新規登録</h1>
                <textarea name="mainline[main_line_name]" placeholder="ライン名、メーカー、号数など"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('mainline.main_line_name') }}</p>
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/line">戻る</a>]</div>
    </body>
</html>