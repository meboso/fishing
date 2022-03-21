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
        <a href="/rods">登録ロッド一覧</a>
        <a href="/reel">登録リール一覧</a>
        <a href="/line">登録ライン一覧</a>
        <a href="/lures">登録ルアー一覧</a>
        <h2>[<a href='/rods/rod_create'>新規登録</a>]</h2>
        <div class='rods'>
            @foreach ($rods as $rod)
            <div class='rod_lists'>
            <p class='rod_name'><a href="/rods/{{ $rod->id }}">{{ $rod->rod_name }}</a></p>
            </div>
            <div class="card-footer text-right">
            　[<a href="/rods/{{ $rod->id }}/edit">編集</a>]
            <form action="/rods/{{ $rod->id }}" id="form_delete" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <span onclick="return deleteRod(this);">[削除]</span>
            </form>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$rods->links()}}
        </div>
        <script>
            function deleteRod(e){
            'use stict';
            if (window.confirm('削除すると復元できません。\n本当に削除しますか？'))
            {
                document.getElementById('form_delete').submit();
            }
            else{
            alert("削除をキャンセルしました。")
            }
            }
        </script>
    </body>
</html>