<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    
    public function songs()   
{
    return $this->hasMany(Song::class);  
}
    public function festivals(){
        //フェスには複数のアーティストが出演している
        return $this->belongsToMany(Festival::class);
    }
    public function comments()   
{
    return $this->hasMany(Comment::class);  
}
    
}
