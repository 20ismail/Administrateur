<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\SalleEstController;
use App\Http\Controllers\SecretaireController;
use App\Http\Controllers\VacataireController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('admins', AdministrateurController::class);
Route::resource('salleEsts', SalleEstController::class);
Route::resource('professeurs', ProfesseurController::class);
Route::resource('secretaire', SecretaireController::class);

Route::get('/Accueil', function () {
    return view('home');
})->name('home');

Route::get('/salle', function () {
    return view('salle');
})->name('salle');

Route::get('/disponibilite', function () {
    return view('dispo');
})->name('dispo');

Route::get('/vacataire', [VacataireController::class, 'index'])->name('vacataire.index');
Route::post('/vacataire', [VacataireController::class, 'store'])->name('vacataire.store');
Route::get('/vacataire/{id}/edit', [VacataireController::class, 'edit'])->name('editVacataire');
Route::put('/vacataire/{id}', [VacataireController::class, 'update'])->name('vacataire.update');
Route::delete('/vacataire/{id}', [VacataireController::class, 'destroy'])->name('vacataire.destroy');

Route::get('/enseignant', [ProfesseurController::class, 'index'])->name('enseignant.index');
Route::post('/enseignant', [ProfesseurController::class, 'store'])->name('enseignant.store');
Route::get('/enseignant/{id}/edit', [ProfesseurController::class, 'edit'])->name('editEnseignant');
Route::put('/enseignant/{id}', [ProfesseurController::class, 'update'])->name('enseignant.update');
Route::delete('/enseignant/{id}', [ProfesseurController::class, 'destroy'])->name('enseignant.destroy');

Route::get('/module', function () {
    return view('module');
})->name('module');

Route::get('/filiere', function () {
    return view('filiere');
})->name('filiere');

