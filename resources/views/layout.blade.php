<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Tienda</title>
</head>
<body>
<header>
    <img class="max-h-fit max" src="{{asset('images/logo_empresa.png')}}" alt="Logo Empresa">
    <h1 class="titulo">Venta de Tecnología</h1>
    <div class="logueo">
        @auth()
            {{auth()->user()->name}}

            <form action="{{route('logout')}}" method="post">
                @csrf
                <x-button>LOGOUT</x-button>
            </form>
        @endauth
        @guest()
            <x-ancla ref="{{route('login')}}">LOGIN</x-ancla>
            <x-ancla ref="{{route('register')}}">REGISTRAR</x-ancla>
        @endguest
    </div>
</header>
<nav>
<div>
    <a href="">Enlace 01</a>
    <a href="">Enlace 02</a>
    <a href="">Enlace 03</a>
</div>
</nav>
<main>
    @yield("contenido")
</main>
<footer>
    Pié de Página
</footer>
</body>
</html>
