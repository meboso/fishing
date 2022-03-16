<?php

namespace App\Http\Controllers;

use App\Rod;
use App\Http\Requests\RodRequest;


class RodController extends Controller
{
    //
    public function rod_lists(Rod $rod)
{
    return view('memos/rod_lists')->with(['rods' => $rod->getPaginateBylimit()]);
}
    public function rod_show(Rod $rod)
{
    return view('memos/rod_show')->with(['rod' => $rod]);
}
    public function rod_create()
{
    return view('memos/rod_create');
}
    public function store(Rod $rod, RodRequest $request)
    {
        $input = $request['rod'];
        $rod->fill($input)->save();
        return redirect('/rods/' . $rod->id);
}
    public function rod_edit(Rod $rod)
{
    return view('memos/rod_edit')->with(['rod' => $rod]);
}
   public function update(RodRequest $request, Rod $rod)
{
    $input_rod = $request['rod'];
    $rod->fill($input_rod)->save();
    return redirect('/rods/' . $rod->id);
}
}