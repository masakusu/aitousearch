<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Zatudan;
use App\Katana;

class UsersController extends Controller
{
    public function welcome()
    {
        return view('welcome');
        
    }
    
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', [
            'user' => $user,
        ]);
    }
    
    public function favorites($id)
    {
        $user = User::find($id);
        $favorites = $user->favorites()->paginate(10);

        $data = [
            'user' => $user,
            'katanas' => $favorites,
        ];

        $data += $this->counts($user);

        return view('users.favorites', $data);
    }
    
    public function goods($id)
    {
        $user = User::find($id);
        $goods = $user->goods()->paginate(10);

        $data = [
            'user' => $user,
            'zatudans' => $goods,
        ];

        $data += $this->counts($user);

        return view('users.goods', $data);
    }
    
    public function deleteData(Request $request)
    {
        $user = User::find($request->input('id'));
        if (\Auth::id() === $user) {
            $user->delete();
        }
    }
}
