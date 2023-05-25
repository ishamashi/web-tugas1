<?php

use App\Http\Controllers\TopikController;
use App\Models\Topik;
use Illuminate\Support\Facades\Route;

use App\Models\Materi;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'ICHO ISHAMASHI',
        'nim' => '210401010240'
    ]);
});


Route::get('/blog', [TopikController::class, 'index']);
Route::get('/blog/{topik:slug}', [TopikController::class, 'show']);

Route::get('/materis', function(){
    return view('materis', [
        'title' => 'Topik Materi',
        'topiks' => Materi::all(),
    ]);
});
Route::get('/materis/{materi:slug}', function(Materi $materi) {
    return view('materi', [
        'title' => $materi->name,
        'topiks' => $materi->topiks,
        'materi' => $materi->name,
    ]);
});