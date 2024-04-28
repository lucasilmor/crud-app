<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () { //utilizando o auth do breeze para garantia q só autenticados possam fazer o CRUD
    
    //rota responsavel por carregar os dados da model
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //rota necessaria para abrir o formulario de criação
    Route::get('/personagens/create', [DashboardController::class, 'create'])->name('personagens.create'); 

    //rota que executa a criação de um novo registro
    Route::post('/personagens', [DashboardController::class, 'store'])->name('personagens.store');

    //rota para deletar registros
    Route::delete('/personagens/{id}', [DashboardController::class, 'destroy'])->name('personagens.destroy');


});

require __DIR__.'/auth.php';
