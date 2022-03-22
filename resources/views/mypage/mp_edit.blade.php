<!DOCTYPE HTML>
@extends('layouts.app')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    </head>
    @section('content')
    <body>
            <h1>プロフィール編集画面</h1>
    <div class="body">
       
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
    @endsection
</html>