<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
    </head>
    <body>
<div class="body">
   <form action="/posts" enctype="multipart/form-data" method="POST"> 
    @csrf
    <h1>新規登録</h1>
    <h2>魚</h2>
    <input type='text' name="post[fish]" placeholder="魚の名前"></input>
    <p class="body__error" style="color:red">{{ $errors->first('post.fish') }}</p>
    <h2>写真</h2>
    <input type="file" name="image">
  <div class="category">
    <h2>使用タックル</h2>
    <p><label>ロッド：<select name="post[rod_id]"></label></p>
        <option ngValue='null'></option>
    @foreach($rods as $rod)
        <option value="{{ $rod->id }}">{{ $rod->rod_name }}</option>
    @endforeach
    </select>
    <p><label>リール：<select name="post[reel_id]"></label></p>
        <option ngValue='null'></option>
    @foreach($reels as $reel)
        <option value="{{ $reel->id }}">{{ $reel->reel_name }}</option>
    @endforeach
    </select>
    <p><label> ライン：<select name="post[mainline_id]"></label></p>
        <option ngValue='null'></option>
    @foreach($mainlines as $mainline)
        <option value="{{ $mainline->id }}">{{ $mainline->main_line_name }}</option>
    @endforeach
    </select>
    <p><label>ルアー：<select name="post[lure_id]"></label></p>
        <option ngValue='null'></option>
    @foreach($lures as $lure)
        <option value="{{ $lure->id }}">{{ $lure->lure_name }}</option>
    @endforeach
    </select>
  </div>
</div>
    <input type="submit" value="登録"/>
    </form>
    <div class="back">[<a href="/posts">戻る</a>]</div>
    </body>
</html>