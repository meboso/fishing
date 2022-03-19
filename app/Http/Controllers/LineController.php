<?php

namespace App\Http\Controllers;

use App\Mainline;
use App\Http\Requests\MainlineRequest;


class LineController extends Controller
{
    //
    public function line_lists(Mainline $mainline)
{
    return view('lines/line_lists')->with(['mainlines' => $mainline->getPaginateBylimit()]);
}
    public function line_show(Mainline $mainline)
{
    return view('lines/line_show')->with(['mainline' => $mainline]);
}
    public function line_create()
{
    return view('lines/line_create');
}
    public function store(Mainline $mainline, MainlineRequest $request)
    {
        $input = $request['mainline'];
        $mainline->fill($input)->save();
        return redirect('/lines/' . $mainline->id);
}
    public function line_edit(Mainline $mainline)
{
    return view('lines/line_edit')->with(['mainline' => $mainline]);
}
   public function update(MainlineRequest $request, Mainline $mainline)
{
    $input_line = $request['mainline'];
    $mainline->fill($input_line)->save();
    return redirect('/lines/' . $mainline->id);
}
   public function delete(Mainline $mainline)
{
    $mainline->delete();
    return redirect('/line');
}
}