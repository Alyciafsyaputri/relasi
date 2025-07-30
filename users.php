<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}