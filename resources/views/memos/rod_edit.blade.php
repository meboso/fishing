<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <h1>編集画面</h1>
            <div class="body">
        <form action="/rods/{{ $rod->id }}" method="POST">
            @csrf
            @method('PUT')
              <div class='cantent_rod'>
                <input type='text' name='rod[rod_name]' value="{{ $rod->rod_name }}">
              </div>
            </div>
            <input type="submit" value="編集完了"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>