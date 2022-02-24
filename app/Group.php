<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function members(){
        return $this->hasMany(Member::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }
}
