<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    public function messages(){
        return $this->hasMany(Message::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function followers(){
        return $this->hasMany(Follower::class);
    }
    
    public function groups(){
        return $this->hasMany(Group::class);
    }
}
