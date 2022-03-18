<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>登録ライン一覧</h1>
        <a href="/rod">登録ロッド一覧</a>
        <a href="/reel">登録リール一覧</a>
        <a href="/line">登録ライン一覧</a>
        <h2>[<a href='/lines/line_create'>新規登録</a>]</h2>
        <div class='lines'>
            @foreach ($lines as $line)
            <div class='line_lists'>
            <p class='line_name'><a href="/lines/{{ $line->id }}">{{ $line->main_lines }}{{ $line->leaders }}</a></p>
            </div>
            <div class="card-footer text-right">
            　[<a href="/lines/{{ $line->id }}/edit">編集</a>]
            <form action="/lines/{{ $line->id }}" id="form_delete" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return deleteReel()">削除</button>
            </form>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$lines->links()}}
        </div>
        <script>
            function deleteLine(){
            'use stict';
            if (window.confirm('削除すると復元できません。\n本当に削除しますか？'))
            {
                document.getElementById('form_delete').submit();
            }
            }
        </script>
    </body>
</html>