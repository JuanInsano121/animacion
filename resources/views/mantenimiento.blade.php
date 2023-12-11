<!DOCTYPE html>
<html>

<head>
    <title>MANTENIMIENTO</title>
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

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }

        h1 {
            color: #007bff;
        }

        form {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #000000;
        }

        label {
            font-weight: bold;
        }

        input,
        button {
            margin-bottom: 10px;
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
    <h1 class="text-center">Formulario de Mantenimiento</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Formulario para ingresar datos de mantenimiento -->
    <form action="{{ url('/mantenimiento') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="ID_MANTENIMIENTO">ID Mantenimiento:</label>
            <input type="text" name="ID_MANTENIMIENTO" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="ID_EQUIPO">ID Equipo:</label>
            <input type="text" name="ID_EQUIPO" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="PRIORIDAD_MANT">Prioridad:</label>
            <select name="PRIORIDAD_MANT" class="form-control" required>
                <option value="urgente">Urgente</option>
                <option value="alta">Alta</option>
                <option value="media">Media</option>
                <option value="baja">Baja</option>
            </select>
        </div>

        <div class="form-group">
            <label for="DURACION_MANT">Duración:</label>
            <input type="text" name="DURACION_MANT" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="FECHA_MANT">Fecha:</label>
            <input type="date" name="FECHA_MANT" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="DESCRIPCION_MAT">Descripción:</label>
            <input type="text" name="DESCRIPCION_MAT" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Registro de Mantenimiento</button>
    </form>

    <!-- Scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <div>
        <a href="{{ url('/inicio') }}" class="boton-docentes"><span>INICIO</span></a>
    </div>


</body>

</html>
