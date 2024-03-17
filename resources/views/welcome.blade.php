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
                <div class="textLogo">___ SUSHI TALLON ___</div>
            </div>

            <div id="options">
                <div class="btnInicio subtitle"><a class="sectionMenuColor" href="">INICIO</a></div>
                <div class="btnRestaurantes subtitle"><a href="{{route("restaurante.index")}}">RESTAURANTES</a></div>
                <div class="btnCatering subtitle"><a href="{{route("menu.index")}}">CATERING</a></div>
                <div class="btnPlatos subtitle"><a href="{{route("dish.index")}}">PLATOS</a></div>
            </div>

            <div id="section1">
                <div class="image"></div>
                <div class="title dorado">LA MEJOR MATERIA PRIMA DEL MERCADO</div>
                <div class="subtitle white">
                    Una cuidada elaboración, un excelente servivicio y su exclusiva
                    decoración se unen para dar forma a SUSHI TALLON. Un lugar pensado para descubrir
                    los sabores y texturas que encierra la alta cocina japonesa.
                </div>
            </div>

            <div id="section2">
                <div class="image"></div>
                <div class="title dorado">VANGUARDISTA E INNOVADOR</div>
                <div class="subtitle white">
                    Desde los platos más clásicos de la cocina tradicional nipona hasta los platos
                    vanguardistas e innovadoras.
                </div>
            </div>

            <div id="section3">
                <div class="image"></div>
                <div class="title dorado">UNO DE LOS REFERENTES MAS IMPORTANTES</div>
                <div class="subtitle white">
                    SUSHI TALLON se ha convertido en uno de los referentes mas importantes
                    de esta cocina, por su inmejorable relación calidad precio y por el excelente
                    servicio que brinda su amplio equipo de profesionales especializados en este sector.

                </div>
            </div>

            <div id="section4">
                <div class="image"></div>
                <div class="title dorado">OFERTA CULINARIA</div>
                <div class="subtitle white">
                    Un restaurante hecho a la medida de un público exigente que además de la
                    oferta culinaria encuentra en sus restaurantes una excelente y cuidada carta
                    de vinos con mas de 300 referencias para maridar cualquier plato.
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
