<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\DashboardController;



use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('movies', \App\Http\Controllers\MovieController::class);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//movies route
Route::middleware(['auth'])->group(function () {
    Route::resource('movies', MovieController::class);
});



//movie suggestion routes.
Route::get('/suggest', [SuggestionController::class, 'showForm'])->name('suggest.form');  ///Route to show the genre selection
Route::post('/suggest', [SuggestionController::class, 'suggest'])->name('suggest.result');///Route to return a movie suggestion
//random movie route
Route::post('/suggest/surprise', [SuggestionController::class, 'surprise'])->name('suggest.surprise');


require __DIR__.'/auth.php';



