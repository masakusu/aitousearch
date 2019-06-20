<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        $count_katanas = $user->katanas()->count();
        $count_zatudans = $user->zatudans()->count();
        $count_favorites = $user->favorites()->count();
        $count_goods = $user->goods()->count();

        return [
            'count_katanas' => $count_katanas,
            'count_zatudans' => $count_zatudans,
            'count_favorites' => $count_favorites,
            'count_goods' => $count_goods,
        ];
    }
}
