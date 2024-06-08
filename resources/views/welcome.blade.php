<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <h1>Lista de Alumnos</h1>
        <a href="#" class="btn btn-primary">Crear Nuevo Alumno</a>
        <table class="table table-bordered mt-3">
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
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->Carnet }}</td>
                        <td>{{ $alumno->Nombre_alumno }}</td>
                        <td>{{ $alumno->Correo_Institucional }}</td>
                        <td>{{ $alumno->Telefono }}</td>
                        <td>
                            <a href="{{ route('registroalumnos.edit', $alumno) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('registroalumnos.destroy', $alumno) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


</body>
</html>
