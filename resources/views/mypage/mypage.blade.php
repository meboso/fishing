<!DOCTYPE html>
@extends('layouts.app')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>釣果メモ</title>
</head>
@section('content')
<body>
    <h1 class="user_name">マイページ</h1>
    <div class="user_info">
      <div class="user_profile">
        <p class="user_icon">画像</p>
        <p class="user_name">目細広大</p>
        <a href="/mypages/{mypage}/edit">プロフィールを編集</a>
      </div>
      <div class="tackles">
          <h1 class="tackles">登録タックル一覧</h1>
          <a href="/rods">登録ロッド一覧</a>
          <a href="/reel">登録リール一覧</a>
          <a href="/line">登録ライン一覧</a>
          <a href="/lures">登録ルアー一覧</a>
      </div>
        <div class="fish_record">
            <h1 class="fish_record">釣果一覧</h2>
              <div class="create">
                  <a href="fish_create.html">釣果登録</a>
             </div>
                <a href="/fish/"><p>フクラギ</p></a>
        </div>
        
    </div>
</body>
@endsection
</html>



 　　　　　　  　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
