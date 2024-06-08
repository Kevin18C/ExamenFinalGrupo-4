<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <h1>Crear Nuevo Alumno</h1>
        <form action="{{ route('registroalumnos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="carnet">Carnet:</label>
                <input type="number" name="carnet" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nombre_alumno">Nombre Alumno:</label>
                <input type="text" name="nombre_alumno" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="correo_institucional">Correo Institucional:</label>
                <input type="email" name="correo_institucional" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="number" name="telefono" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>


</body>
</html>
