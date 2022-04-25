<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<header class="bg-header h-15v flex flex-row justify-between items-center p-8">
    <img class="max-h-full" src="{{asset("images/logo_empresa.png")}}" alt="logo">
    <h1 class="max-h-full text-6xl text-red-100">Tienda de componentes</h1>
    <div>
        @auth
            <h2>{{auth()->user()->name}}</h2>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <x-button>Logout</x-button>
            </form>
        @endauth
        @guest
            <form action="{{route('login')}}" method="post">
                <x-input name="email" placeholder="email"></x-input>
                <x-input name="password" placeholder="password"></x-input>
                <br>
                <x-button>Login</x-button>
                                <x-ancla ref="{{route('register')}}">Registrarme</x-ancla>
                @if ($errors->any())
                    <h2>Login Incorrecto</h2>
                @endif
            </form>
        @endguest
    </div>
</header>
<nav class="bg-nav h-10v">
    @yield("menu")
</nav>
<main class="bg-main h-65v">
    @yield("contenido")
</main>
<footer class="h-10v bg-footer">
    <h1>footer fijo @copyright contacto y podrímos aportar redes sociales</h1>
</footer>


</body>
</html>

