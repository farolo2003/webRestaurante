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
        <div class="btnRestaurantes subtitle"><a class="sectionMenuColor" href="">RESTAURANTES</a></div>
        <div class="btnCatering subtitle"><a href="{{route("menu.index")}}">CATERING</a></div>
        <div class="btnPlatos subtitle"><a href="{{route("dish.index")}}">PLATOS</a></div>
    </div>

    <div id="restaurantes">
        <div class="titleRestaurante title dorado"><u>Restaurantes</u></div>
        <div class="restauranteBCN white">
            <div class="contenidoRestaurante">
                <div class="titleRes white">SUSHI TALLON</div>
                <div class="locationRestaurante"><b>Barcelona</b></div>
                <button class="btnReserva" onclick="abrirDialogo('Barcelona')">Reserva</button>
            </div>
        </div>
        <div class="restauranteMadrid white">
            <div class="contenidoRestaurante">
                <div class="titleRes white">SUSHI TALLON</div>
                <div class="locationRestaurante"><b>Madrid</b></div>
                <button class="btnReserva" onclick="abrirDialogo('Madrid')">Reserva</button>
            </div>
        </div>
        <div class="restauranteSevilla white">
            <div class="contenidoRestaurante">
                <div class="titleRes white">SUSHI TALLON</div>
                <div class="locationRestaurante"><b>Sevilla</b></div>
                <button class="btnReserva" onclick="abrirDialogo('Sevilla')">Reserva</button>
            </div>
        </div>
        <div class="restauranteAndorra white">
            <div class="contenidoRestaurante">
                <div class="titleRes white">SUSHI TALLON</div>
                <div class="locationRestaurante"><b>Andorra</b></div>
                <button class="btnReserva" onclick="abrirDialogo('Andorra')">Reserva</button>
            </div>
        </div>
        <div class="restauranteAlicante white">
            <div class="contenidoRestaurante">
                <div class="titleRes white">SUSHI TALLON</div>
                <div class="locationRestaurante"><b>Alicante</b></div>
                <button class="btnReserva" onclick="abrirDialogo('Alicante')">Reserva</button>
            </div>
        </div>
        <div class="restauranteBilbao white">
            <div class="contenidoRestaurante">
                <div class="titleRes white">SUSHI TALLON</div>
                <div class="locationRestaurante"><b>Bilbao</b></div>
                <button class="btnReserva" onclick="abrirDialogo('Bilbao')">Reserva</button>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="politica white">Politica de privacidad</div>
        <div class="coockies white">Politica de COOCKIES</div>
        <div class="avisoLegal white">Aviso legal</div>
        <div class="trabaja white">Trabaja con nosotros</div>
    </div>
</main>

<div id="dialogo" class="oculto dialogo">

    <form id="form" action="{{route("reservaConfirmada.index")}}" method="POST">
        @csrf
        <div class="cerrarImg">
            <label onclick="cerrarDialogo()">X</label>
        </div>

        <h2 class="titleRestaurante">___ SUSHI TALLON ___</h2>
        <h3 class="locationRestaurantes"></h3>
        <!-- Nombre -->
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="name" required>
        </div>
        <!-- Apellido -->
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="lastname" required>
        </div>
        <!-- Email -->
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <!-- Día (Calendario) -->
        <div>
            <label for="dia">Día de la Reserva:</label>
            <input type="date" id="dia" name="date" required>
        </div>
        <!-- Hora (Select) -->
        <div>
            <label for="hora">Hora de la Reserva:</label>
            <select id="hora" name="hour" required>
                <option value="" disabled selected>Selecciona una hora</option>
                <option value="13">13:00 </option>
                <option value="14">14:00 </option>
                <option value="15">15:00</option>
                <option value="20">20:00</option>
                <option value="21">21:00</option>
                <option value="22">22:00</option>
                <!-- Agrega más opciones según tus necesidades -->
            </select>
        </div>
        <!-- Número de Personas (Select) -->
        <div>
            <label for="num_personas">Número de Personas:</label>
            <select id="num_personas" name="num_person" required>
                <option value="" disabled selected>Selecciona el número de personas</option>
                <!-- Generar opciones del 1 al 12 -->
                <?php for ($i = 1; $i <= 12; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <!-- Botón de enviar -->
        <button class="submitBTN" type="submit">Enviar Reserva</button>
    </form>

</div>


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
