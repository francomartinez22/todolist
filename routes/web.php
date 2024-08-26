<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Ruta para mostrar la lista de tareas.
// Mapea la URL raíz ('/') al método 'index' del controlador 'TaskController'.
Route::get('/', [TaskController::class, 'index']);

// Ruta para agregar una nueva tarea.
// Mapea la URL raíz ('/') al método 'store' del controlador 'TaskController' utilizando el método POST.
Route::post('/', [TaskController::class, 'store']);

// Ruta para eliminar una tarea específica.
// Mapea la URL con el ID de la tarea ('/{id}') al método 'destroy' del controlador 'TaskController' utilizando el método DELETE.
// Además, asigna un nombre a la ruta como 'task.destroy'.
Route::delete('/{id}', [TaskController::class,'destroy'])->name('task.destroy');
