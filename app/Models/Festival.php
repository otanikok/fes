<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    use HasFactory;
    
    public function artists(){
        //フェスには複数のアーティストが出演している
        return $this->belongsToMany(Artist::class);
    }
    public function songs(){
        //フェスには複数のアーティストが出演している
        return $this->belongsToMany(Song::class);
    }
}
