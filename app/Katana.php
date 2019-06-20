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
    
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'user_id', 'katana_id')->withTimestamps();
    }
}
