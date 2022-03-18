<?php

namespace App\Http\Controllers;

use App\Line;
use App\Http\Requests\LineRequest;


class LineController extends Controller
{
    //
    public function line_lists(Line $line)
{
    return view('lines/line_lists')->with(['lines' => $line->getPaginateBylimit()]);
}
    public function line_show(Line $line)
{
    return view('lines/line_show')->with(['line' => $line]);
}
    public function line_create()
{
    return view('lines/line_create');
}
    public function store(Line $line, LineRequest $request)
    {
        $input = $request['line'];
        $line->fill($input)->save();
        return redirect('/lines/' . $line->id);
}
    public function line_edit(Line $line)
{
    return view('lines/line_edit')->with(['line' => $reel]);
}
   public function update(LineRequest $request, Line $line)
{
    $input_line = $request['line'];
    $line->fill($input_line)->save();
    return redirect('/lines/' . $line->id);
}
   public function delete(Line $line)
{
    $line->delete();
    return redirect('/line');
}
}