<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>釣果メモ</title>
</head>
<body>
    <a href="/">マイページへ</a>
    <h1 class="post">釣果一覧</h1>
    <h2>[<a href='/posts/create'>新規登録</a>]</h2>
    <div class='posts'>
    @foreach ($posts as $post)
        <a href="/rods/{{ $post->rod->id }}">{{ $post->rod->rod_name }}</a>
            <div class='fish_lists'>
            <p class='fish'><a href="/posts/{{ $post->id }}">{{ $post->fish }}</a></p>
            </div>
            <div class="card-footer text-right">
            　[<a href="/posts/{{ $post->id }}/edit">編集</a>]
            <form action="/posts/{{ $post->id }}" id="form_delete" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <span onclick="return deleteRod(this);">[削除]</span>
            </form>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$posts->links()}}
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