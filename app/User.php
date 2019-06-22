<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function zatudans()
    {
        return $this->hasMany(Zatudan::class);
    }
    
    public function katanas()
    {
        return $this->hasMany(Katana::class);
    }
    
    public function favorites()
    {
        return $this->belongsToMany(Katana::class, 'favorites', 'user_id', 'katana_id')->withTimestamps();
    }
    
    public function favorite($katanaId)
    {
        
        $exist = $this->is_favorites($katanaId);
    
        if ($exist) {
            return false;
        } else {
            $this->favorites()->attach($katanaId);
            return true;
        }
    }
    
    public function unfavorite($katanaId)
    {
        $exist = $this->is_favorites($katanaId);
    
        if ($exist) {
            $this->favorites()->detach($katanaId);
            return true;
        } else {
            return false;
        }
    }
    
    public function is_favorites($katanaId)
    {
        return $this->favorites()->where('katana_id', $katanaId)->exists();
    }
    
    public function goods()
    {
        return $this->belongsToMany(Zatudan::class, 'goods', 'user_id', 'zatudan_id')->withTimestamps();
    }
    
    public function good($zatudanId)
    {
        
        $exist = $this->is_goods($zatudanId);
    
        if ($exist) {
            return false;
        } else {
            $this->goods()->attach($zatudanId);
            return true;
        }
    }
    
    public function ungood($zatudanId)
    {
        $exist = $this->is_goods($zatudanId);
    
        if ($exist) {
            $this->goods()->detach($zatudanId);
            return true;
        } else {
            return false;
        }
    }
    
    public function is_goods($zatudanId)
    {
        return $this->goods()->where('zatudan_id', $zatudanId)->exists();
    }
    
}
