<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Festival;

class FestivalController extends Controller
{
    public function index(Festival $festival){
        return view('festivals.index')->with(['festivals' => $festival->get()]);
    }
    public function show($festival_id){
        $festival = Festival::with('artists')->where('id',$festival_id)->first();
        return view('festivals.show')->with(['festival'=>$festival]);
    }
}