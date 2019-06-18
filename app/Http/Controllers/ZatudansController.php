<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZatudansController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $zatudans = $user->zatudans()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'zatudans' => $zatudans,
            ];
        }
        
        return view('welcome', $data);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->zatudans()->create([
            'content' => $request->content,
        ]);

        return back();
    }
    
    public function destroy($id)
    {
        $zatudan = \App\Zatudan::find($id);

        if (\Auth::id() === $zatudan->user_id) {
            $zatudan->delete();
        }

        return back();
    }

}
