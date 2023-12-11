
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>

    <!-- Estilos CSS comunes -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.6rem;
            line-height: 2rem;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Cambia el color de fondo según tus preferencias */
        }

        nav {
            background-color: #333;
            padding: 10px;
            color: #fff; /* Cambia el color del texto según tus preferencias */
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Agrega más estilos según tus necesidades */
    </style>
</head>
<body>
    <!-- Barra de navegación común -->
    <nav>
        <ul>
            <li><a href="{{ url('/inicio') }}">Inicio</a></li>
            <li><a href="{{ url('/consulta_docentes') }}">Consulta de Docentes</a></li>
            <!-- Agrega aquí más enlaces de navegación según tus necesidades -->
        </ul>
    </nav>

    <div class="container">
        <!-- Contenido específico de cada vista -->
        @yield('content')
    </div>



    <!-- Scripts comunes -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
