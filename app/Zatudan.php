<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zatudan extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function good_users()
    {
        return $this->belongsToMany(User::class, 'goods', 'user_id', 'zatudan_id')->withTimestamps();
    }
    
    public function zatudans()
    {
        return $this->hasMany(Zatudan::class);
    }
}
