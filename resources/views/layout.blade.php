<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
<header class="container-fluid, justify-between">
    <div class="col, flex, img-fluid">
        <img src="{{asset("images/logo.svg")}}" alt="logo">
    </div>
    <div class="col, flex, title, px-10, font-bold, text-4xl">
        <h1>Empresa de ventas</h1>
    </div>
    <div class="col px-10">
        @auth
        <p>bienvenido {{auth()->user()->name}}</p>
            <form action="{{route("logout")}}" method="post">
                @csrf
                <x-button>Logout</x-button>
            </form>
        @endauth
        @guest
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-input id="email" class="block mt-1 w-full p-0" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input id="password" class="block mt-1 w-full p-0"
                             type="password"
                             name="password"
                             required autocomplete="current-password" />
                    <x-button class="ml-3 mt-1 pt-0 pb-0">
                        {{ __('Log in') }}
                    </x-button>
                    <x-ancla ref="{{route('register')}}" class="pt-0 pb-0">Registrarse</x-ancla>
                    @if ($errors->any())
                        <h3>datos incorrectos</h3>
                    @endif
                </form>
            @endguest
    </div>
</header>
<nav class="nav">
    @yield('menu')
    <x-ancla ref="{{route('productos.index')}}">productos</x-ancla>
    <x-ancla ref="/">home</x-ancla>
</nav>
<main>
    @yield("content")
</main>
<footer>footer</footer>


</body>
</html>
