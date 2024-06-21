
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .hidden-menu {
            display: none;
        }

        @media (max-width: 768px) {
            .hidden-menu {
                display: block;
            }

            .nav-menu {
                display: none;
            }
        }
    </style>
</head>

<body style="background-color: #F5CBA7; background-image: url('https://img.freepik.com/fotos-premium/textura-fondo-carton-reciclado-color-beige-fotograma-completo_136875-2707.jpg');" class="text-gray-800">
    <nav class="flex py-5 bg-indigo-500 text-white items-center">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">Merrash</p>
        </div>

        <div class="hidden-menu flex justify-end px-4 md:hidden">
            <button id="menu-btn" class="text-white focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <ul id="nav-menu" class="nav-menu w-1/2 px-16 ml-auto flex justify-end pt-1 md:flex md:items-center">
            @if(auth()->check())
            <li class="mx-8 flex items-center">
                <i class="fas fa-user text-xl text-gray-500 mr-2"></i>
                <p class="text-xl">BIENVENIDO <b>{{ auth()->user()->name }}</b></p>
            </li>    

            <li>
                <a href="{{ route('login.destroy') }}"
                    class="font-bold py-2 px-4 rounded-md bg-red-500 hover:bg-red-600">Cerrar Sesión</a>
            </li>
            
            @else
            <li class="mx-6">
                <a href="{{ route('welcome') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">
                    <i class="fas fa-home mr-2"></i> Inicio
                </a>
            </li>
            
            <li class="mx-6">
                <a href="{{ route('usuarios') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">
                    <i class="fas fa-sign-in-alt mr-2"></i> Iniciar Sesión
                </a>
            </li>
              
            <li>
                <a href="{{ route('register.index') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">
                    <i class="fas fa-user-plus mr-2"></i> Registrarse
                </a>
            </li>
            
            @endif
        </ul>
    </nav>

    <div id="mobile-menu" class="hidden md:hidden">
        <ul class="flex flex-col items-center bg-indigo-500 text-white py-5">
            @if(auth()->check())
            <li class="my-2 flex items-center">
                <i class="fas fa-user text-xl text-gray-500 mr-2"></i>
                <p class="text-xl">BIENVENIDO <b>{{ auth()->user()->name }}</b></p>
            </li>

            <li class="my-2">
                <a href="{{ route('login.destroy') }}"
                    class="font-bold py-2 px-4 rounded-md bg-red-500 hover:bg-red-600">Cerrar Sesión</a>
            </li>

            @else
            <li class="my-2">
                <a href="{{ route('welcome') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">
                    <i class="fas fa-home mr-2"></i> Inicio
                </a>
            </li>

            <li class="my-2">
                <a href="{{ route('login.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">
                    <i class="fas fa-sign-in-alt mr-2"></i> Iniciar Sesión
                </a>
            </li>

            <li class="my-2">
                <a href="{{ route('register.index') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">
                    <i class="fas fa-user-plus mr-2"></i> Registrarse
                </a>
            </li>

            @endif
        </ul>
    </div>

    @yield('content')

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>