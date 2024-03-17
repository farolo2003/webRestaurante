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
                <div class="btnCatering subtitle"><a  href="{{route("menu.index")}}">CATERING</a></div>
                <div class="btnPlatos subtitle"><a class="sectionMenuColor" href="">PLATOS</a></div>
            </div>


            <div id="platosSection">
                <div id="platosSection">
    <div class="platosTitle dorado"><u>Platos</u></div>

    @php $i = 1; @endphp
    @foreach($platos as $plato)
        @if($i % 3 == 1)
            <div class="ronda{{ ceil($i / 3) }}">
        @endif
            <div class="grid{{ $i % 3 == 0 ? 3 : $i % 3 }}"></div>
            <div class="titleGrid{{ $i % 3 == 0 ? 3 : $i % 3 }} white">{{ $plato->name }}</div>
        @if($i % 3 == 0 || $i == count($platos))
            </div>
        @endif
        @php $i++; @endphp
    @endforeach
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
