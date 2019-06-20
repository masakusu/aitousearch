<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatanasController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $katanas = $user->katanas()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'katanas' => $katanas,
            ];
        }
        
        return view('katanas.index', $data);
    }
    
    public function history()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $katanas = $user->katanas()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'katanas' => $katanas,
            ];
        }
        
        return view('katanas.history', $data);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'feature' => 'required|max:191',
            'content' => 'required|max:191',
        ]);

        $request->user()->katanas()->create([
            'name' => $request->name,
            'feature' => $request->feature,
            'content' => $request->content,
        ]);

        return back();
    }
    
    public function destroy($id)
    {
        $katana = \App\Katana::find($id);

        if (\Auth::id() === $katana->user_id) {
            $katana->delete();
        }

        return back();
    }

}
