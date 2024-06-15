<?php

use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PerfilController::class, 'index'])->name('index');
Route::get('/sobre-mi', [PerfilController::class, 'about'])->name('sobre-mi');
Route::get('/educacion', [PerfilController::class, 'educacion'])->name('educacion');
Route::get('/contacto', [PerfilController::class, 'contacto'])->name('contacto');


Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos');
