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
    <p><label>[ユーザー名]</label>{{Auth::user()->name}}</p>
  <div class="user_info">
    <div class="user_profile">
      <p class="user_icon"></p>
      <p class="user_name"></p>
    </div>
    <div class="tackles">
      <h1 class="tackles">登録タックル一覧</h1>
      <a href="/rods">登録ロッド一覧</a>
      <a href="/reel">登録リール一覧</a>
      <a href="/line">登録ライン一覧</a>
      <a href="/lures">登録ルアー一覧</a>
    </div>
  </div>    
  <div class="fish_record">
    <h2 class="fish_record"><a href="/posts">釣果一覧へ</a></h2>
  </div>
</body>
@endsection
</html>



 　　　　　　  　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
