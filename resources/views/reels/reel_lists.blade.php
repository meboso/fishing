<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>登録リール一覧</h1>
        <a href="/rods">登録ロッド一覧</a>
        <a href="/reel">登録リール一覧</a>
        <a href="/line">登録ライン一覧</a>
        <a href="/lures">登録ルアー一覧</a>
        <h2>[<a href='/reels/reel_create'>新規登録</a>]</h2>
        <div class='reels'>
            @foreach ($reels as $reel)
            <div class='reel_lists'>
            <p class='reel_name'><a href="/reels/{{ $reel->id }}">{{ $reel->reel_name }}</a></p>
            </div>
            <div class="card-footer text-right">
            　[<a href="/reels/{{ $reel->id }}/edit">編集</a>]
            <form action="/reels/{{ $reel->id }}" id="form_delete" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <span onclick="return deleteReel(this);">[削除]</span>
            </form>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$reels->links()}}
        </div>        
        <script>
            function deleteReel(e){
            'use stict';
            if (confirm('削除すると復元できません。\n本当に削除しますか？'))
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