<!DOCTYPE html>
<html lang="es">

<head>
    <title>Consulta de Préstamos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
                html {
            font-size: 65.5%;
            /** reset para rem */
        }

        .barra {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 3rem;
        }

        /*header*/
        .site-header.inicio {
            background-image: url(../img/header.jpg);
            background-position: center center;
            background-size: cover;
            /*vh ajusta por automatico la altura de la pantalla*/
            /*espacio de abajo*/
            height: 25vh;
            min-height: 30rem;
        }

        .contenido-header {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .contenido-header h1 {
            color: white;
            padding-bottom: 2rem;
            max-width: 65rem;
            line-height: 4.5rem;
        }

        .barra {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }

        h1 {
            color: #007bff;
        }

        table {
            margin-top: 20px;
        }

        th,
        td {
            text-align: center;
        }
    </style>
</head>
<header class="site-header inicio">
    <div class="contenedor contenido-header">
        <div class="barra">
            <img src="{{ asset('img/tecnm.png') }}" alt="TECNM">
            <img src="{{ asset('img/tesjo.jpg') }}" alt="TESJO">
        </div>
        <div>

            <h2 class="fw-300 centrar-tex">INGENIERIA EN ANIMACION Y DISEÑO DIGITAL </h2>
        </div>
    </div>
</header>
<body>
    <div>
        <a href="{{ url('/inicio') }}" class="boton-docentes"><span>INICIO</span></a>
    </div>
    <div class="container">
        <h1 class="text-center">Consulta de Préstamos - {{ $fechaActual }}</h1>

        <!-- Calendario para seleccionar fecha -->
        <div class="form-group">
            <label for="fecha">Seleccionar fecha:</label>
            <input type="text" id="fecha" class="form-control" data-toggle="flatpickr">
        </div>

        <!-- Mostrar los préstamos o el mensaje si no hay consultas -->
        @if(count($prestamos) > 0)
        <!-- Tabla para mostrar los préstamos del día -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Préstamo</th>
                    <th>ID Encargado</th>
                    <th>Nombre Encargado</th>
                    <th>Hora Préstamo</th>
                    <th>Fecha Préstamo</th>
                    <th>Fecha Devuelta</th>
                    <th>ID Equipo</th>
                    <th>Número de Control</th>
                    <th>ID Docente</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prestamos as $prestamo)
                <tr>
                    <td>{{ $prestamo->ID_PRESTAMO }}</td>
                    <td>{{ $prestamo->ID_ENCARGADO }}</td>
                    <td>{{ $prestamo->NOMBRE_ENCARGADO }}</td>
                    <td>{{ $prestamo->HORA_PRESTAMO }}</td>
                    <td>{{ $prestamo->FECHA_PRESTAMO }}</td>
                    <td>{{ $prestamo->FECHA_DEVUELTA }}</td>
                    <td>{{ $prestamo->ID_EQUIPO }}</td>
                    <td>{{ $prestamo->NO_CONTROL }}</td>
                    <td>{{ $prestamo->ID_DOCENTE }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="alert alert-info">
            No hay consultas para la fecha seleccionada.
        </div>
        @endif
    </div>

    <!-- Scripts de Bootstrap (jQuery y Popper.js) y Flatpickr -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr("#fecha", {
            dateFormat: "Y-m-d",
            onChange: function (selectedDates, dateStr, instance) {
                // Redirigir a la página con la nueva fecha seleccionada
                window.location.href = "/consulta?fecha=" + dateStr;
            }
        });
    </script>
</body>

</html>
