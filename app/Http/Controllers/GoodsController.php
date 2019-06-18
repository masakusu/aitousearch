<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->good($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->ungood($id);
        return back();
    }
}
