<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ServiceController;

Route::get('/', [EntrepriseController::class, 'index']);

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/ajouter', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services/ajouter', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/edit/{service}', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

Route::prefix('employes')->name('employes.')->group(function () {
    Route::get('/', [EmployeController::class, 'index'])->name('index');
    Route::get('/ajouter', [EmployeController::class, 'create'])->name('create');
    Route::post('/ajouter', [EmployeController::class, 'store'])->name('store');
    Route::get('/modifier/{employe}', [EmployeController::class, 'edit'])->name('edit');
    Route::put('/modifier/{employe}', [EmployeController::class, 'update'])->name('update');
    Route::delete('/supprimer/{employe}', [EmployeController::class, 'destroy'])->name('destroy');
    Route::get('/fiche/{employe}', [EmployeController::class, 'show'])->name('show');
    // Route::get('/liste_par_service', [EmployeController::class, 'listByService'])->name('listByService'); // en passant un argument get
    Route::get('/liste_par_service/{serviceName}', [EmployeController::class, 'listByService'])->name('listByService'); // on récupèrera la liste de employé par le nom service
});