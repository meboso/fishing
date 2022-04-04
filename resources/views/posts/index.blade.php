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
        <div class='fish_lists'>
            <p class='fish'><a href="/posts/{{ $post->id }}">{{ $post->fish }}</a></p>
        </div>
    @endforeach
    </div>
    <div class='paginate'>
     {{$posts->links()}}
    </div>
</body>
</html>