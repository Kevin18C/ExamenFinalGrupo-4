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
        <h1 class="mb-4">Lista de Alumnos</h1> <a href="{{ route('registroalumnos.create') }}"
            class="btn btn-primary mb-3">Crear Nuevo Alumno</a>
            


        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Carnet</th>
                    <th>Nombre</th>
                    <th>Correo Institucional</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->Carnet }}</td>
                        <td>{{ $alumno->Nombre_alumno }}</td>
                        <td>{{ $alumno->Correo_Institucional }}</td>
                        <td>{{ $alumno->Telefono }}</td>
                        <td> <a href="{{ route('registroalumnos.edit', $alumno) }}"
                                class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('registroalumnos.destroy', $alumno) }}" method="POST"
                                style="display:inline;"> @csrf @method('DELETE') <button type="submit"
                                    class="btn btn-sm btn-danger">Eliminar</button> </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
