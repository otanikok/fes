<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FestivalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SetlistController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/',[FestivalController::class,'index']);
Route::get('/fes/create',[FestivalController::class,'create']);
Route::get('/fes/{festival}',[FestivalController::class,'show']);
Route::get('/festivals/{festival}/edit',[FestivalController::class,'edit']);
Route::put('/festivals/{festival}',[FestivalController::class,'update']);
Route::post('/festivals',[FestivalController::class,'store']);
Route::get('/artist/create',[ArtistController::class,'create']);
Route::get('/artist/{artist}',[ArtistController::class,'show']);
Route::post('/artists',[ArtistController::class,'store']);
Route::get('/song/create',[SongController::class,'create']);
Route::post('/songs',[SongController::class,'store']);
Route::get('/setlists', [SetlistController::class, 'index']);
Route::get('/setlists/create', [SetlistController::class, 'create']);
Route::post('/setlists', [SetlistController::class, 'store']);


require __DIR__.'/auth.php';
