<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    public function festivals(){
        //フェスには複数のアーティストが出演している
        return $this->belongsToMany(Festival::class);
    }
    public function artist()
{
    return $this->belongsTo(Artist::class);
}
}
