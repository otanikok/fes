<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','artist_id',];
    
    public function festivals(){
        return $this->belongsToMany(Festival::class);
    }
    public function artist()
    {
    return $this->belongsTo(Artist::class);
    }
public function setlist()
    {
        return $this->belongsTo(Setlist::class);
    }
}
