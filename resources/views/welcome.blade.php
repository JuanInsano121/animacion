<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ANIMACION</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="/resources/viwes/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
    html {
        font-size: 65.5%; /* reset para rem */
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 1.6rem;
        line-height: 2rem;
    }

        img {
            max-width: 90%;
        }

        .contenedor {
            max-width: 150rem;
            margin: 0 auto 0 auto;
        }

        h1 {
            font-size: 3.8rem;
        }

        h2 {
            font-size: 3.4rem;
        }

        h3 {
            font-size: 2.5rem
        }

        h4 {
            font-size: 2.6rem
        }

        .seccion {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .fw-300 {
            font-weight: 300;
        }

        .centrar-tex {
            text-align: center;
        }

        .d-block {
            display: block !important;
        }

        /*botones*/
        .boton {
            color: white;
            font-weight: 600;
            text-decoration: none;
            font-size: 1.8rem;
            padding: 1rem 3rem;
            margin-top: 3rem;
            display: inline-block;
            text-align: center;
        }

        .boton-amarillo {
            background-color: #E08709;
            ;
        }

        .boton-verde {
            background-color: #71B100;
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


        /*iconos nosotros*/


        .iconos-nosotros {
            display: flex;
            justify-content: space-between;
        }

        .icono {
            flex-basis: calc(33.3% - 1rem);
            text-align: center;
        }

        .icono h3 {
            text-transform: uppercase;
        }

        /*anuncios*/
        .contenedor-anuncios {
            display: flex;
            justify-content: space-between;

        }

        .anuncio {
            flex-basis: calc(33.3% - 1rem);
            border-style: solid;
            border-color: #b5b5b5;
            border-width: 1px;
            background-color: rgba(245, 245, 245, 0.7);
            /* Ajusta el valor de opacidad según tus necesidades */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .anuncio img {
            max-width: 100%;
            /* Asegura que la imagen no se salga del contenedor */
            height: auto;
            /* Mantiene la proporción de la imagen */
        }

        .contenido-anuncio h3,
        .contenido-anuncio p {
            margin: 1;
            line-height: 1.5rem 2rem;
        }

        .precio {
            color: #71B100;
            font-weight: 700;
        }

        .iconos-caracteristicas {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: space-evenly;

        }

        .iconos-caracteristicas li {

            display: flex;
        }

        .iconos-caracteristicas li img {
            margin-right: 1.5rem;
            align-items: center;
        }

        .contenido-anuncio {
            padding: 1rem;
        }

        .ver-todas {
            display: flex;
            justify-content: flex-end;
        }

        /*contacto home*/
        .imagen-contacto {
            background-image: url(../img/encuentra.jpg);
            height: 40rem;
            background-position: center center;
            background-size: cover;
            display: flex;
            align-items: center;

        }

        .contenido-contacto {
            flex: 1;
            color: white;

        }

        .contenido-contacto p {
            font-size: 1.8rem;
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
            <h2 class="fw-300 centrar-tex">TECNOLOGICO DE ESTUDIOS SUPERIORES DE JOCOTITLAN</h2>
            <h2 class="fw-300 centrar-tex">INGENIERIA EN ANIMACION Y DISEÑO DIGITAL </h2>
        </div>
    </div>
</header>

<main class="seccion contenedor">

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <img src="{{ asset('img/docentes.png') }}" alt="ICONO DOCENTES">
            <div class="contenido-anuncio">
                <h3 class="centrar-tex">DOCENTES</h3>
                <p class="centrar-tex">INGRESA MAS DOCENTES</p>

                <a href="{{ url('/docentes') }}" class="boton-docentes"><span>Docentes</span></a>
            </div>
        </div>

        <div class="anuncio">
            <img src="{{ asset('img/estudiantes.png') }}" alt="ICONO ESTUDIANTES">
            <div class="contenido-anuncio">
                <h3 class="centrar-tex">ESTUDIANTES</h3>
                <p class="centrar-tex">CONSULTA ESTUDIANTES</p>
                <a href="{{ url('/estudiantes') }}" class="boton-docentes"><span>ESTUDIANTES</span></a>

            </div>
        </div>

        <div class="anuncio">
            <img src="{{ asset('img/equipos.png') }}" alt="ICONO EQUIPOS">
            <div class="contenido-anuncio">
                <h3 class="centrar-tex">EQUIPOS</h3>
                <p class="centrar-tex">ACTUALIZA O VERIFICA EQUIPOS DISPONIBLES</p>
                <a href="{{ url('/equipos') }}" class="boton-docentes"><span>EQUIPOS</span></a>
            </div>
        </div>
    </div>
</main>
<main class="seccion contenedor">
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <img src="{{ asset('img/prestamos.png') }}" alt="ICONO PRESTAMOS">
            <div class="contenido-anuncio">
                <h3 class="centrar-tex">PRESTAMOS</h3>
                <p class="centrar-tex">SOLICITAR  PRESTAMOS</p>
                <a href="{{ url('/prestamos') }}" class="boton-docentes"><span>PRESTAMOS</span></a>
            </div>
        </div>

        <div class="anuncio">
            <img src="{{ asset('img/mantenimiento.png') }}" alt="ICONO MANTENIMIENTO">
            <div class="contenido-anuncio">
                <h3 class="centrar-tex">MANTENIMIENTO</h3>
                <p class="centrar-tex">CONSULTA ESTUDIANTES</p>
                <a href="{{ url('/mantenimiento') }}" class="boton-docentes"><span>MANTENIMIENTO</span></a>
            </div>
        </div>

        <div class="anuncio">
            <img src="{{ asset('img/categorias.png') }}" alt="ICONO CATEGORIAS">
            <div class="contenido-anuncio">
                <h3 class="centrar-tex">CATEGORIAS</h3>
                <p class="centrar-tex">VERIFICA LA CATEGORIA O INGRESA MAS CATEGORIAS</p>
                <a href="{{ url('/categoria') }}" class="boton-docentes"><span>CATEGORIAS</span></a>
            </div>
        </div>
    </div>

    <div class="anuncio">
        <img src="{{ asset('img/mantenimiento.png') }}" alt="ICONO MANTENIMIENTO">
        <div class="contenido-anuncio">
            <h3 class="centrar-tex">CONSULTA</h3>
            <p class="centrar-tex">CONSULTA PRESTAMOS</p>
            <a href="{{ url('/consulta') }}" class="boton-docentes"><span>CONSULTA</span></a>
        </div>
    </div>
</main>
