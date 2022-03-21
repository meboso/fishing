<?php

namespace App\Http\Controllers;

use App\Lure;
use App\Http\Requests\LureRequest;


class LureController extends Controller
{
    //
    public function lure_lists(Lure $lure)
{
    return view('lures/lure_lists')->with(['lures' => $lure->getPaginateBylimit()]);
}
    public function lure_show(Lure $lure)
{
    return view('lures/lure_show')->with(['lure' => $lure]);
}
    public function lure_create()
{
    return view('lures/lure_create');
}
    public function store(Lure $lure, LureRequest $request)
    {
        $input = $request['lure'];
        $lure->fill($input)->save();
        return redirect('/lures/' . $lure->id);
}
    public function lure_edit(Lure $lure)
{
    return view('lures/lure_edit')->with(['lure' => $lure]);
}
   public function update(LureRequest $request, Lure $lure)
{
    $input_lure = $request['lure'];
    $lure->fill($input_lure)->save();
    return redirect('/lures/' . $lure->id);
}
   public function delete(Lure $lure)
{
    $lure->delete();
    return redirect('/lures');
}
}