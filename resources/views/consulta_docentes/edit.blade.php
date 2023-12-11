<!-- resources/views/consulta_docentes/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <style>
        /* Estilos específicos para la página de edición */
        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #28a745;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>

    <h1>Editar Docente</h1>

    <form action="{{ route('consulta_docentes.update', $docente->ID_DOCENTE) }}" method="post">
        @csrf
        @method('put')

        <label for="NOM_DOCENTE">Nombre:</label>
        <input type="text" name="NOM_DOCENTE" value="{{ $docente->NOM_DOCENTE }}" required>

        <label for="AP_P_DOCENTE">Apellido Paterno:</label>
        <input type="text" name="AP_P_DOCENTE" value="{{ $docente->AP_P_DOCENTE }}" required>

        <label for="AP_M_DOCENTE">Apellido Materno:</label>
        <input type="text" name="AP_M_DOCENTE" value="{{ $docente->AP_M_DOCENTE }}" required>

        <label for="DEP_DOCENTE">Departamento:</label>
        <input type="text" name="DEP_DOCENTE" value="{{ $docente->DEP_DOCENTE }}" required>

        <label for="ASIGNATURA_DOCENTE">Asignatura:</label>
        <input type="text" name="ASIGNATURA_DOCENTE" value="{{ $docente->ASIGNATURA_DOCENTE }}" required>

        <label for="TEL_DOCENTE">Teléfono:</label>
        <input type="text" name="TEL_DOCENTE" value="{{ $docente->TEL_DOCENTE }}" required>

        <label for="CORREO_DOCENTE">Correo:</label>
        <input type="email" name="CORREO_DOCENTE" value="{{ $docente->CORREO_DOCENTE }}" required>

        <button type="submit">ACTUALIZAR</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Otro contenido de la vista, si es necesario -->
@endsection
