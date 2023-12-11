<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>


</head>
<body>
    @extends('layouts.app')

    @section('content')
        <style>
            h1 {
                color: #333; /* Cambia el color del encabezado según tus preferencias */
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            table, th, td {
                border: 1px solid #ddd;
            }

            th, td {
                padding: 12px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2; /* Cambia el color de fondo del encabezado de la tabla según tus preferencias */
            }

            .btn-edit, .btn-delete {
                display: inline-block;
                padding: 8px 12px;
                margin: 4px;
                text-decoration: none;
                color: #fff;
                background-color: #333;
                border: 1px solid #333;
                border-radius: 4px;
                cursor: pointer;
            }

            .btn-delete {
                background-color: #d9534f; /* Cambia el color de fondo del botón eliminar según tus preferencias */
                border: 1px solid #d9534f;
            }

            /* Agrega más estilos según tus necesidades */
        </style>
<h1>Consulta de Docentes</h1>

@if(count($docentes) > 0)
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Departamento</th>
            <th>Asignatura</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($docentes as $docente)
            <tr>
                <td>{{ $docente->ID_DOCENTE }}</td>
                <td>{{ $docente->NOM_DOCENTE }}</td>
                <td>{{ $docente->AP_P_DOCENTE }}</td>
                <td>{{ $docente->AP_M_DOCENTE }}</td>
                <td>{{ $docente->DEP_DOCENTE }}</td>
                <td>{{ $docente->ASIGNATURA_DOCENTE }}</td>
                <td>{{ $docente->TEL_DOCENTE }}</td>
                <td>{{ $docente->CORREO_DOCENTE }}</td>
                <td>
                    <a href="{{ route('consulta_docentes.edit', $docente->ID_DOCENTE) }}" class="btn-edit">Editar</a>
                </td>
                <td>
                    <form action="{{ route('consulta_docentes.destroy', $docente->ID_DOCENTE) }}" method="post" class="form-delete">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn-delete ">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No hay docentes registrados.</p>
@endif
@endsection

</body>
</html>
