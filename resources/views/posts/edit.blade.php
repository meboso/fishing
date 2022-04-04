<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>釣果メモ</title>
    </head>
    <body>
            <h1>編集画面</h1>
    <div class="body">
    <form action="/posts/{{ $post->id }}"  enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class='cantent_post'>
    <h2>魚</h2>
    <input type='text' name='post[fish]' value="{{ $post->fish }}">
    <p class="body__error" style="color:red">{{ $errors->first('post.fish') }}</p>
    </div>
    <h2>写真</h2>
    <img src="{{ $post->image }}" width="20%" height="auto">
    <input type="file" name="image">
      <div class="category">
    <h2>使用タックル</h2>
    <p><label>ロッド：<select name="post[rod_id]"></label></p>
    @if(!isset($post->rod->rod_name))
        <option ngValue='null'></option>
    @foreach($rods as $rod)
        <option value="{{ $rod->id }}">{{ $rod->rod_name }}</option>
    @endforeach
    @else
        <option value='{{ $post->rod->id }}'>{{ $post->rod->rod_name }}</option>
        <option ngValue='null'></option>
    @foreach($rods as $rod)
        <option value="{{ $rod->id }}">{{ $rod->rod_name }}</option>
    @endforeach    
    @endif
    </select>
    
    <p><label>リール：<select name="post[reel_id]"></label></p>
    @if(!isset($post->reel->reel_name))
        <option ngValue='null'></option>
    @foreach($reels as $reel)
        <option value="{{ $reel->id }}">{{ $reel->reel_name }}</option>
    @endforeach
    @else
        <option value='{{ $post->reel->id }}'>{{ $post->reel->reel_name }}</option>
        <option ngValue='null'></option>
    @foreach($reels as $reel)
        <option value="{{ $reel->id }}">{{ $reel->reel_name }}</option>
    @endforeach    
    @endif    
    </select>
    
    <p><label> ライン：<select name="post[mainline_id]"></label></p>
    @if(!isset($post->mainline->main_line_name))
        <option ngValue='null'></option>
    @foreach($mainlines as $mainline)
        <option value="{{ $mainline->id }}">{{ $mainline->main_line_name }}</option>
    @endforeach
    @else
        <option value='{{ $post->mainline->id }}'>{{ $post->mainline->main_line_name }}</option>
        <option ngValue='null'></option>
    @foreach($mainlines as $mainline)
        <option value="{{ $mainline->id }}">{{ $mainline->main_line_name }}</option>
    @endforeach
    @endif
    </select>
    
    <p><label>ルアー：<select name="post[lure_id]"></label></p>
    @if(!isset($post->lure->lure_name))
        <option ngValue='null'></option>
    @foreach($lures as $lure)
        <option value="{{ $lure->id }}">{{ $lure->lure_name }}</option>
    @endforeach
    @else
        <option value='{{ $post->lure->id }}'>{{ $post->lure->lure_name }}</option>
        <option ngValue='null'></option>
    @foreach($lures as $lure)
        <option value="{{ $lure->id }}">{{ $lure->lure_name }}</option>
    @endforeach
    @endif
    </select>
  </div>
        <input type="submit" value="編集完了"/>
    </form>
    </div>
        <div class="back">[<a href="/posts/{{ $post->id }}">戻る</a>]</div>
    </body>
</html>