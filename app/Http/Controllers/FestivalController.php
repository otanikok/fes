<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Festival;
use App\Models\Artist;

class FestivalController extends Controller
{
    public function index(Festival $festival){
        return view('festivals.index')->with(['festivals' => $festival->get()]);
    }
    public function show($festival_id){
        $festival = Festival::with('artists')->where('id',$festival_id)->first();
        return view('festivals.show')->with(['festival'=>$festival]);
    }
    public function create(Artist $artist){
        return view('festivals.create')->with(['artists'=>$artist->get()]);
    }
    public function store(Request $request,Festival $festival){
        $input_festival =$request['festival'];
        $input_artists =$request->artists_array;
        $festival->fill($input_festival)->save();
        $festival->artists()->attach($input_artists);
        return redirect('/fes/'.$festival->id);
    }
    public function edit(Festival $festival){
        return view('festivals.edit')->with(['festival' => $festival]);
    }
    public function update(Request$request,Festival $festival){
        $input_festival =$request['festival'];
        $festival->fill($input_festival)->save();
        return redirect('/fes/'.$festival->id);
    }
}