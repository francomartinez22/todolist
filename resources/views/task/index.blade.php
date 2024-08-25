<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Todo List en Laravel</title>
</head>
<body>

    <form action="{{url('/')}}" method="post">
        @csrf
        <input type="text" name="task" id="task">
        <input type="submit" value="Agregar">
    </form>

    <br/> 
    <table border="1">
        <tr>

            <td> Nombre de la tarea </td>
            <td> Acción </td>

        </tr>

        <tr>

            <td> Hacer </td>
            <td> X </td>

        </tr>
    </table>
</body>
</html>
