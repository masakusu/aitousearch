<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Katana extends Model
{
    protected $fillable = ['name', 'feature', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
