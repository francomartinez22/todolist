<!doctype html>
<html lang="en">
    <head>
        <!-- Título de la página -->
        <title>Aplicación</title>
        
        <!-- Meta tags requeridos -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Importación de CSS de Bootstrap versión 5.3.2 para el estilo de la página -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- Espacio para una barra de navegación (navbar) si es necesario -->
        </header>
        <main class="container">
            <br/>

            <!-- Tarjeta que contiene el formulario y la lista de tareas -->
            <div class="card">
                <div class="card-header">TAREAS:</div>
                <div class="card-body">
                    <!-- Formulario para agregar nuevas tareas -->
                    <form action="{{url('/')}}" method="post">
                        @csrf <!-- Protección CSRF -->
                        <!-- Campo de texto para ingresar una nueva tarea -->
                        Tarea:<br/><br/>
                        <input type="text" class="form-control" name="task" id="task">
                        <br/>
                        <!-- Botón para enviar el formulario -->
                        <input type="submit" class="btn btn-primary" value="Agregar">
                    </form>
                    <br/>
                    
                    <!-- Tabla que muestra las tareas almacenadas -->
                    <div class="table-responsive-sm table-bordered">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Acción</th>
                                    <th scope="col">Nombre tarea</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Iteración sobre las tareas para mostrarlas en la tabla -->
                                @foreach($tasks as $task)
                                    <tr>
                                        <!-- Botón para marcar la tarea como realizada -->
                                        <td>
                                            <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                                @csrf
                                                @method('DELETE') <!-- Método DELETE para la eliminación -->
                                                <input type="submit" class="btn btn-danger" value="Realizada">
                                            </form>
                                        </td>
                                        <!-- Mostrar el nombre de la tarea -->
                                        <td>{{ $task->task }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-muted"></div>
            </div>
            <br/>
        </main>
        <footer>
            <!-- Espacio para el pie de página si es necesario -->
        </footer>
        <!-- Importación de JavaScript de Bootstrap y Popper.js -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
