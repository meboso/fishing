<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <div class="body">
        <form action="/rods" method="POST">
            @csrf
                <h1>新規登録</h1>
                <textarea name="rod[rod_name]" placeholder="ロッド名、メーカー、番手など"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('rod.rod_name') }}</p>
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>