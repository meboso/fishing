<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>釣果メモ</title>
  <!-- Fonts -->
  <link href="[https://fonts.googleapis.com/css?family=Nunito:200,600](https://fonts.googleapis.com/css?family=Nunito:200,600)" rel="stylesheet">
</head>
<body>
   <div class='posts'>
       <h2 class="fish">魚</h2>
       <p>{{ $post->fish }}</p>
       <h2 class="photo">写真</h2>
       <img src="{{ $post->image }}" width="20%" height="auto">
       <h2 class="fish">使用タックル</h2>
       @if(!isset( $post->rod->rod_name ))
       <p>[ロッド]</p>
       @else
       <p>[ロッド]{{ $post->rod->rod_name }}</p>
       @endif
       @if(!isset( $post->reel->reel_name ))
       <p>[リール]</p>
       @else
       <p>[リール]{{ $post->reel->reel_name }}</p>
       @endif
       @if(!isset( $post->mainline->main_line_name ))
       <p>[ライン]</p>
       @else
       <p>[ライン]{{ $post->mainline->main_line_name }}</p>
       @endif
       @if(!isset( $post->lure->lure_name ))
       <p>[ルアー]</p>
       @else
       <p>[ルアー]{{ $post->lure->lure_name }}</p>
       @endif
    <div class="card-footer text-right">
　      [<a href="/posts/{{ $post->id }}/edit">編集</a>]
         <form action="/posts/{{ $post->id }}" id="form_delete" method="POST" style="display:inline">
         @csrf
         @method('DELETE')
         <input type="submit" style="display:none">
         <span onclick="return deleteRod(this);">[削除]</span>
         </form>
         </div>
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
          <div class="footer">
          <a href="/posts">一覧へ戻る</a>
          </div>
          </body>
 </html>