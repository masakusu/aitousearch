<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Zatudan;

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
        
        return view('zatudans.index', $data);
    }
    
    public function create()
    {
        $zatudan = new Zatudan;

        return view('zatudans.create', [
            'zatudan' => $zatudan,
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);
        
        $zatudan = new Zatudan;
        $zatudan->user_id = \Auth::user()->id;
        $zatudan->content = $request->content;
        $zatudan->save();

        return redirect('/');
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
