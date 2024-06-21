
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar Sesión</title>

    <link rel="shortcut icon" type="image/x-icon" href="/img/brand/Spa-1.jpg" sizes="16x16 24x24 32x32 48x48"/>
    <link rel="icon" type="image/x-icon" href="/img/brand/Spa-1.jpg" sizes="16x16 24x24 32x32 48x48"/>
    <link rel="apple-touch-icon" href="/img/brand/Spa-1.jpg"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box; 
        }
    
        .btn-wsp {
            position: fixed;
            width: 55px;
            height: 55px;
            line-height: 55px;
            bottom: 30px;
            right: 30px; 
            background: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 35px;
            box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.3);
            z-index: 100;
            transition: all 300ms ease;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none; 
        }
    
        .btn-wsp i {
            margin-left: 5px; 
        }
    
        .btn-wsp:hover {
            background: #20ba5a;
        }
    
        @media only screen and (min-width: 320px) and (max-width: 768px) {
            .btn-wsp {
                width: 63px;
                height: 63px;
                line-height: 66px; 
                right: 20px; 
            }
        }
    </style>
    </head>
    <body>
    
        <a href="https://wa.me/7224958550?text=Hola%20quisiera%20más%20información" class="btn-wsp" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/128/15707/15707820.png" alt="WhatsApp icon">
        </a>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    </body>
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
        <div class="site-branding flex items-center">
            <img src="img/brand/FONDO-1.png" alt="Merrash Logo" style="width: 50px; margin-right: 10px;">
            <p class="site-title" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px; color: #121212;">
                <a href="{{ route('welcome') }}" rel="home">
                    Merrash
                </a>
            </p>
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