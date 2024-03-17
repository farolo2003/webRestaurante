<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <div class="textLogo">___ SUSHI TALLON ___</u></div>
            </div>

            <div id="options">
                <div class="btnInicio subtitle"><a href="{{route("welcome.index")}}">INICIO</a></div>
                <div class="btnRestaurantes subtitle"><a href="{{route("restaurante.index")}}">RESTAURANTES</a></div>
                <div class="btnCatering subtitle"><a class="sectionMenuColor" href="">CATERING</a></div>
                <div class="btnPlatos subtitle"><a href="{{route("dish.index")}}">PLATOS</a></div>
            </div>


            <div id="menus">
                <div class="titleMenu title dorado"><u>Catering</u></div>

                <div class="contenidoMenu">
                    <div class="menu menu1">
                        <div class="titleMenus dorado"><u>Menú 1</u></div>
                        <div class="platos white">
                            @foreach ($nombresPlatosMenu1 as $key => $nombrePlato)
                                <div class="plato subtitle">{{ $nombrePlato }}</div>
                            @endforeach
                        </div>
                        <div class="precio white"><section class="precios">{{ $precioMenu1 }} €</section></div>
                    </div>

                    <div class="menu menu2">
                        <div class="titleMenus dorado"><u>Menú 2</u></div>
                        <div class="platos white">
                            @foreach ($nombresPlatosMenu2 as $key => $nombrePlato)
                                <div class="plato subtitle">{{ $nombrePlato }}</div>
                            @endforeach
                        </div>
                        <div class="precio white"><section class="precios">{{ $precioMenu2 }} €</section></div>
                    </div>

                    <div class="menu menu3">
                        <div class="titleMenus dorado"><u>Menú 3</u></div>
                        <div class="platos white">
                            @foreach ($nombresPlatosMenu3 as $key => $nombrePlato)
                                <div class="plato subtitle">{{ $nombrePlato }}</div>
                            @endforeach
                        </div>
                        <div class="precio white"><section class="precios">{{ $precioMenu3 }} €</section></div>
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
    </body>
</html>
