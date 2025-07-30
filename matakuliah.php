<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    public function mahasiswa(){
        return $this->belongsToMany(mahasiswa::class);
    }
}
