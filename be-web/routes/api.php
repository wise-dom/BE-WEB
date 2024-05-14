<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\FiliereController;
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Endpoints Classe
Route::get('classes/getClasses',[ClasseController::class, 'index'])->name('classes.index');
Route::get('classes/getByClasse/{classe}',[ClasseController::class, 'show'])->name('classes.show');
Route::post('classes/create',[ClasseController::class, 'store'])->name('classes.store');
Route::put('classes/update/{classe}',[ClasseController::class, 'update'])->name('classes.update');
Route::delete('classes/delete/{classe}',[ClasseController::class, 'destroy'])->name('classes.destroy');

// Endpoints Filiere
Route::get('filieres/getFilieres',[FiliereController::class, 'index'])->name('filieres.index');
Route::get('filieres/getByFiliere/{filiere}',[FiliereController::class, 'show'])->name('filieres.show');
Route::post('filieres/create',[FiliereController::class, 'store'])->name('filieres.store');
Route::put('filieres/update/{filiere}',[FiliereController::class, 'update'])->name('filieres.update');
Route::delete('filieres/delete/{filiere}',[FiliereController::class, 'destroy'])->name('filieres.destroy');



