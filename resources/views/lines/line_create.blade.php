<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <div class="body">
        <form action="/lines" method="POST">
            @csrf
                <h1>新規登録</h1>
                <textarea name="line[main_lines]" placeholder="ライン名、メーカー、号数など"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('line.main_lines') }}</p>
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/line">戻る</a>]</div>
    </body>
</html>