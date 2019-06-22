<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Katana;

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
        
        return view('katanas.history');
    }
    
    public function katanas()
    {
        return view('katanas.katanas');
    }
    
    public function create()
    {
        $katana = new Katana;

        return view('katanas.create', [
            'katana' => $katana,
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'feature' => 'required|max:191',
            'content' => 'required|max:191',
        ]);

        $katana = new Katana;
        $katana->user_id = \Auth::user()->id;
        $katana->name = $request->name;
        $katana->feature = $request->feature;
        $katana->content = $request->content;
        $katana->save();

        return redirect('/');
    }
    
    public function show($id)
    {
        $katana = Katana::find($id);
            
            $data = [
                'katana' => $katana,
            ];
        
        return view('katanas.show', $data);
    }
    
    public function edit($id)
    {
        $katana = Katana::find($id);
        
        if (\Auth::id() === $katana->user_id) {
            return view('katanas.edit', [
            'katana' => $katana,
        ]);
        }
        
        return redirect('/');
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'feature' => 'required|max:191',
            'content' => 'required|max:191',
        ]);
        
        $katana = new Katana;
        $katana->user_id = \Auth::user()->id;
        $katana->name = $request->name;
        $katana->feature = $request->feature;
        $katana->content = $request->content;
        $katana->save();

        return redirect('/');
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
