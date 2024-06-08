<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1 class="mb-4">Crear Nuevo Alumno</h1>
        <form action="{{ route('registroalumnos.store') }}" method="POST" class="form-group">
            @csrf
            <div class="form-group mb-3">
                <label for="Carnet" class="form-label">Carnet:</label>
                <input type="number" name="Carnet" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="Nombre_alumno" class="form-label">Nombre Alumno:</label>
                <input type="text" name="Nombre_alumno" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="Correo_Institucional" class="form-label">Correo Institucional:</label>
                <input type="email" name="Correo_Institucional" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="Telefono" class="form-label">Teléfono:</label>
                <input type="number" name="Telefono" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
</body>

</html>
