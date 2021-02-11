<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'email', 'phone', 'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
