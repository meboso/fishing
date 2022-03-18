<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <div class="body">
        <form action="/reels" method="POST">
            @csrf
                <h1>新規登録</h1>
                <textarea name="reel[reel_name]" placeholder="リール名、メーカー、番手など"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('reel.reel_name') }}</p>
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>