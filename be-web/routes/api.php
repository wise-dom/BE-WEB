<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
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
// Route::get('classes/getClasses',[ClasseController::class, 'index'])->name('classes.index');
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

// Endpoints Etudiant
Route::get('etudiants/getEtudiants',[EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('etudiants/getByEtudiant/{etudiant}',[EtudiantController::class, 'show'])->name('etudiant.show');
Route::post('etudiants/create',[EtudiantController::class, 'store'])->name('etudiant.store');
Route::put('etudiants/update/{etudiant}',[EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('etudiants/delete/{etudiant}',[EtudiantController::class, 'destroy'])->name('etudiant.destroy');

// Endpoints Enseignant
Route::get('enseignants/getEnseignants',[EnseignantController::class, 'index'])->name('enseignants.index');
Route::get('enseignants/getByEnseignant/{enseignant}',[EnseignantController::class, 'show'])->name('enseignants.show');
Route::post('enseignants/create',[EnseignantController::class, 'store'])->name('enseignants.store');
Route::put('enseignants/update/{enseignant}',[EnseignantController::class, 'update'])->name('enseignants.update');
Route::delete('enseignants/delete/{enseignant}',[EnseignantController::class, 'destroy'])->name('enseignants.destroy');

// Endpoints Cours
Route::get('cours/getCours',[CoursController::class, 'index'])->name('cours.index');
Route::get('cours/getByCours/{cours}',[CoursController::class, 'show'])->name('cours.show');
Route::post('cours/create',[CoursController::class, 'store'])->name('cours.store');
Route::put('cours/update/{cours}',[CoursController::class, 'update'])->name('cours.update');
Route::delete('cours/delete/{cours}',[CoursController::class, 'destroy'])->name('cours.destroy');

// Endpoints Evaluations
Route::get('evaluations/getEvaluations',[CoursController::class, 'index'])->name('evaluations.index');
Route::get('evaluations/getByEvaluation/{evaluation}',[CoursController::class, 'show'])->name('evaluations.show');
Route::post('evaluations/create',[CoursController::class, 'store'])->name('evaluations.store');
Route::put('evaluations/update/{evaluation}',[CoursController::class, 'update'])->name('evaluations.update');
Route::delete('evaluations/delete/{evaluation}',[CoursController::class, 'destroy'])->name('evaluations.destroy');



