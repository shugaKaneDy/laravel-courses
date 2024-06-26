<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IdeaController;
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


MVC = Model View Controller

Controller : Handle Request
Model : Handle data logic and instructions with database (database)
View : What should be shown to the user (HTML and CSS code / Blade files)

*/


Route::get('/',[ DashboardController::class, 'index' ])->name('dashboard');
Route::get('/profile',[ ProfileController::class, 'index' ]);
Route::post('/ideas',[ IdeaController::class, 'store' ])->name('ideas.store');

Route::delete('/ideas/{id}',[ IdeaController::class, 'destroy' ])->name('ideas.destroy');



Route::get('/terms', function () {
    return view('terms');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});


