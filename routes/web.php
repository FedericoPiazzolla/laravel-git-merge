<?php

use App\Http\Controllers\CocktailController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\TrashController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('cocktails', CocktailController::class)->parameters(['cocktails' => 'cocktail:slug']);
Route::resource('ingredients', IngredientController::class)->parameters(['ingredients' => 'ingredient:slug']);

Route::get('trash', [TrashController::class, 'trash'])->name('trash');
Route::get('restore/{id}', [TrashController::class, 'restore'])->name('restore');