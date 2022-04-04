<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use App\Rod;
use App\Reel;
use App\Mainline;
use App\Lure;
use Storage;

class PostController extends Controller
{
    public function index(Post $post)
{
    return view('posts/index')->with(['posts' => $post->getPaginateBylimit()]);
}
    public function show(Post $post)
{
    return view('posts/show')->with(['post' => $post]);
}
   public function create(Rod $rod, Reel $reel, Mainline $mainline, Lure $lure)
{
    return view('posts/create')->with
([
        'rods' => $rod->get(),
        'reels' => $reel->get(),
        'mainlines' => $mainline->get(),
        'lures' => $lure->get()
]);
}
    public function store(Post $post, PostRequest $request)
{
        $input = $request['post'];
        $image = $request->file('image');
        if(!isset($image)){
           $post ->image = null;
        }else{
         // バケットの`fish_photo`フォルダへアップロード
         $path = Storage::disk('s3')->putFile('fish_photo', $image, 'public');
         // アップロードした画像のフルパスを取得
         $post->image = Storage::disk('s3')->url($path);
        }
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
}
    public function edit(Post $post, Rod $rod, Reel $reel, Mainline $mainline, Lure $lure)
{
    return view('posts/edit')->with
([
      'post' => $post, 
      'rods' => $rod->get(),
      'reels' => $reel->get(),
      'mainlines' => $mainline->get(),
      'lures' => $lure->get()
]);
}
   public function update(PostRequest $request, Post $post)
{
      $input_post = $request['post'];
      $image = $request->file('image');
      if(!isset($image)){
         $post ->image = null;
      }else{
         // バケットの`fish_photo`フォルダへアップロード
         $path = Storage::disk('s3')->putFile('fish_photo', $image, 'public');
         // アップロードした画像のフルパスを取得
         $post->image = Storage::disk('s3')->url($path);
      }
      $post->fill($input_post)->save();
      return redirect('/posts/' . $post->id);
}
   public function delete(Post $post)
{
    $post->delete();
    return redirect('/posts');
}
}

