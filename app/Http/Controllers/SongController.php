<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Song;

class SongController extends Controller
{
    public function create(Artist $artist){
        return view('songs.create')->with(['artists'=>$artist->get()]);
}
public function store(Request $request,Song $song){
        $input_song =$request['song'];
        $song->fill($input_song)->save();
        return redirect('/artist/'.$song->artist_id);
}
}

