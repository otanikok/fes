<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function show($artist_id){
        $artist = Artist::with('songs')->where('id',$artist_id)->first();
        return view('artists.show')->with(['artist'=>$artist]);
    }
    public function create(){
        return view('artists.create');
    }
    public function store(Request $request,Artist $artist){
        $input_artist =$request['artist'];
        $artist->fill($input_artist)->save();
        return redirect('/artist/'.$artist->id);
    }
}
