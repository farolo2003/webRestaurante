<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="../css/index.css">
    <!-- Styles -->
    @vite(['resources/css/index.css'])
</head>
<body>
<main>
    <div id="menu">
        <div class="section">
            <div class="imageIdioma"></div>
            <div class="idioma1 white"><a href="#">ES</a></div>
            <div class="idioma2 white"><a href="#">EN</a></div>
            <div class="idioma3 white"><a href="#">CAT</a></div>
        </div>
    </div>

    <div id="logoInfo">
        <div class="textLogo">___ SUSHI TALLON ___</div>
    </div>

    <div id="options">
        <div class="btnInicio subtitle"><a href="{{route("welcome.index")}}">INICIO</a></div>
        <div class="btnRestaurantes subtitle"><a href="{{route("restaurante.index")}}">RESTAURANTES</a></div>
        <div class="btnCatering subtitle"><a href="{{route("menu.index")}}">CATERING</a></div>
        <div class="btnPlatos subtitle"><a href="{{route("dish.index")}}">PLATOS</a></div>
    </div>

    <div id="confirmacion" class="confirmacion">

        <h2 class="titleRestaurante">___ SUSHI TALLON ___</h2>
        <h3 class="confirmed">Reserva Confirmada!</h3>

        <h3>Datos de la Reserva:</h3>

        <div class="titleDatos">Nombre: <span class="datos">{{session("reserva")["name"]}}</span> </div>
        <div class="titleDatos">Apellido: <span class="datos">{{session("reserva")["lastname"]}}</span> </div>
        <div class="titleDatos">Dia: <span class="datos">{{session("reserva")["date"]}}</span> </div>
        <div class="titleDatos">Hora: <span class="datos">{{session("reserva")["hour"]}}</span> </div>
        <div class="titleDatos">Numero de Personas: <span class="datos">{{session("reserva")["num_person"]}}</span></div>

    </div>

    <div id="footer">
        <div class="politica white">Politica de privacidad</div>
        <div class="coockies white">Politica de COOCKIES</div>
        <div class="avisoLegal white">Aviso legal</div>
        <div class="trabaja white">Trabaja con nosotros</div>
    </div>

    </main>


    <script>
        const dialogo = document.getElementById("dialogo");
    const locationTitle = document.querySelector(".locationRestaurantes");
    const confirmacion =document.getElementById("confirmacion")

    const form =document.querySelector("#form");
    const btn=document.querySelector(".submitBTN")


    function abrirDialogo(location) {
        dialogo.classList.remove("oculto");
        locationTitle.innerText = location;
        form.action="/restaurante/"+location;
    }

    function cerrarDialogo() {
        dialogo.classList.add("oculto");
        confirmacion.classList.add("oculto");
    }

    </script>
</body>
</html>
