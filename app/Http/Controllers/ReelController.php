<?php

namespace App\Http\Controllers;

use App\Reel;
use App\Http\Requests\ReelRequest;


class ReelController extends Controller
{
    //
    public function reel_lists(Reel $reel)
{
    return view('reels/reel_lists')->with(['reels' => $reel->getPaginateBylimit()]);
}
    public function reel_show(Reel $reel)
{
    return view('reels/reel_show')->with(['reel' => $reel]);
}
    public function reel_create()
{
    return view('reels/reel_create');
}
    public function store(Reel $reel, ReelRequest $request)
    {
        $input = $request['reel'];
        $reel->fill($input)->save();
        return redirect('/reels/' . $reel->id);
}
    public function reel_edit(Reel $reel)
{
    return view('reels/reel_edit')->with(['reel' => $reel]);
}
   public function update(ReelRequest $request, Reel $reel)
{
    $input_reel = $request['reel'];
    $reel->fill($input_reel)->save();
    return redirect('/reels/' . $reel->id);
}
   public function delete(Reel $reel)
{
    $reel->delete();
    return redirect('/reel');
}
}