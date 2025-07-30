<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    public function matakuliah(){
        return $this->belongsToMany(matakuliah::class);
    }
}
