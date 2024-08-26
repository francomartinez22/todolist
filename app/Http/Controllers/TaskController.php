<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Método que muestra todas las tareas en la vista 'task.index'
    public function index()
    {
        // Obtiene todas las tareas de la base de datos
        $tasks = Task::all();

        // Retorna la vista 'task.index' y le pasa las tareas recuperadas
        return view('task.index', ['tasks' => $tasks]);
    }

    // Método que almacena una nueva tarea en la base de datos
    public function store(Request $request)
    {
        // Obtiene todos los datos del formulario enviados en la solicitud
        $task = $request->all();

        // Crea una nueva tarea con los datos recibidos
        Task::create($task);

        // Redirige a la página principal después de guardar la tarea
        return redirect('/');
    }

    // Método que elimina una tarea de la base de datos
    public function destroy($id)
    {
        // Encuentra la tarea por su ID o lanza una excepción si no se encuentra
        $task = Task::findOrFail($id);

        // Elimina la tarea de la base de datos
        $task->delete();

        // Redirige a la página principal con un mensaje de éxito
        return redirect('/')->with('success', 'Tarea eliminada con éxito');
    }
}
