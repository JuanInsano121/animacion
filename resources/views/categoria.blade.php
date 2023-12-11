<!DOCTYPE html>
<html>

<head>
    <title>CATEGORIA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="/resources/viwes/css/style.css">

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

        /*navegacion*/
        .navegacion a {
            color: white;
            text-decoration: none;
            font-size: 1.8rem;
            /**1.8 rem = 18px**/
            margin-right: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .navegacion a:hover {
            color: #71B100;
        }

        .navegacion a:last-of-type {
            margin: 0;
        }



        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.6rem;
            line-height: 2rem;
            margin: 0;
            /* Asegura que no haya márgenes en el cuerpo */
            padding: 0;
            /* Asegura que no haya relleno en el cuerpo */
            background-image: url('{{ asset('img/fondoa.png') }}');
            /* Ruta de la imagen de fondo */
            background-position: center center;
            background-size: cover;
            height: 100vh;
            /* Ajusta al 100% de la altura de la ventana */
        }

        .boton-docentes {
            font-size: 25px;
            width: 8em;
            height: 2em;
            color: orange;
            border-left: 0.08em solid;
            position: relative;
            margin-top: 0.8em;
            cursor: pointer;
        }

        .boton-docentes::before,
        .boton-docentes::after {
            content: '';
            position: absolute;
            width: inherit;
            border-left: inherit;
            z-index: -1;
        }

        .boton-docentes::before {
            height: 80%;
            top: 10%;
            left: calc(-0.15em - 0.08em * 2);
            filter: brightness(0.8);
        }

        .boton-docentes::after {
            height: 60%;
            top: 20%;
            left: calc(-0.15em * 2 - 0.08em * 3);
            filter: brightness(0.6);
        }

        .boton-docentes span {
            position: relative;
            height: 120%;
            top: -10%;
            box-sizing: border-box;
            border: 0.08em solid;
            background-color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            text-transform: capitalize;
            transform: translateX(calc(-0.15em * 3 - 0.08em * 2));
            transition: 0.3s;
        }

        .boton-docentes:hover span {
            transform: translateX(0.15em);
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
    <div class="container mt-5">
        <h1>Formulario de Categorías</h1>

        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif

        <!-- Formulario para ingresar datos de categorías -->
        <form action="{{ url('/categoria') }}" method="post">
            @csrf
            <label for="ID_CATEGORIA">ID Categoría:</label>
            <input type="text" name="ID_CATEGORIA" required><br>

            <label for="ID_EQUIPO">ID Equipo:</label>
            <input type="text" name="ID_EQUIPO" required><br>

            <label for="NOMBRE_EQUIPO">Nombre del Equipo:</label>
            <input type="text" name="NOMBRE_EQUIPO" required><br>

            <label for="CATEGORIA">Categoría:</label>
            <input type="text" name="CATEGORIA" required><br>

            <button type="submit">Guardar Categoría</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-Ch4P+JMEg5lYR5VjLh3Q1jF5IrZxm9+Sq0Y9J1aDhJ3gEFUO1ePqFmiFF2A02bOt"
            crossorigin="anonymous"></script>
    <div>
        <a href="{{ url('/inicio') }}" class="boton-docentes"><span>INICIO</span></a>
    </div>


</body>

</html>
