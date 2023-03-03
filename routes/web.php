<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\LocalizeController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Localize;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("locale/{lange}", [LocalizeController::class, 'setLang']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DataController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/my-characters', [DataController::class, 'myCharacters'])->name('myCharacters');
    Route::get('/my-characters/create', [DataController::class, 'createCharacter'])->name('character.create');
    Route::get('/my-characters/{id}', [DataController::class, 'detailCharacter'])->name('character.detail');

    Route::get('/my-stories', [DataController::class, 'myStories'])->name('myStories');
});


require __DIR__ . '/auth.php';
