<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function mypage()
{
    return view('mypage/mypage');
}
    public function mp_edit()
{
    return view('mypage/mp_edit');//->wiyh([Mypage $mypage])
}
    public function update(MYpageRequest $request, Mypage $mypage)
{
    $input_mypage = $request['mypage'];
    $mypage->fill($input_mypage)->save();
    return redirect('/mypages');
}
}
