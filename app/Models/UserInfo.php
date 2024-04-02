<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = ['user_id', 'address', 'phone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}