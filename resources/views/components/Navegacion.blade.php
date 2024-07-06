<!DOCTYPE html>
<html lang="en">
<head>
    
    <link crossorigin='anonymous' rel='stylesheet' id='all-css-12-1'
        href='https://s0.wp.com/wp-content/mu-plugins/comment-likes/css/comment-likes.css?m=1407378799i&cssminify=yes'
        type='text/css' media='all' />
    <link crossorigin='anonymous' rel='stylesheet' id='print-css-13-1'
        href='https://s0.wp.com/wp-content/themes/pub/varia/print.css?m=1571655471i&cssminify=yes' type='text/css'
        media='print' />
    <link crossorigin='anonymous' rel='stylesheet' id='all-css-14-1'
        href='https://s0.wp.com/_static/??-eJyFj+EKwjAMhF/IGlaU/RKfpauxRtq0pNmGb2+HMAbK/JcL311yMBfjMyuygj4wYYUyDiA0EQfNDFVfEY++1gP8Ricn5IDYf1AzF5/TlyGNpsQxEFcImE3M3im1+K0w9+hI9qyctV11t0RsBidmsnu04BBzaGOARm3kXp1/zTf56x+QXFWU5aM8oQjdWti6WyKu6dL1ne3OJ2v75xv+tYt+&cssminify=yes'
        type='text/css' media='all' />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #masthead {
            background-color: rgb(238, 219, 243) !important;
            padding: 10px !important;
            padding-left: 20px !important;

        }

        .site-branding .site-title a {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif !important;
            font-size: 30px !important;
            color: #784F96 !important;
            text-decoration: none !important;
            display: flex !important;
            align-items: center !important;
        }

        .site-branding .site-title a img {
            vertical-align: middle !important;
            margin-right: 10px !important;
            width: 50px !important;
        }

        #toggle-menu {
            background-color: rgb(236, 238, 121) !important;

            cursor: pointer !important;
            padding: 10px !important;
            display: none !important; /* Ocultar por defecto */
        }

        .main-menu-container {
            background-color: rgb(238, 219, 243) !important;

            padding: 20px !important;
            border-radius: 10px !important;
        }

        .main-menu .menu-item {
            margin: 0 15px !important;
        }

        .main-menu .menu-item a {
            font-weight: 600 !important;
            padding: 10px 15px !important;
            border-radius: 5px !important;
            color: #7D47C1 !important;
            text-decoration: none !important;
            transition: color 0.3s, background-color 0.3s !important;
        }

        .main-menu .menu-item a:hover {
            color: #85CC36 !important;
            background-color: rgba(125, 71, 193, 0.1) !important;
        }

        .main-menu .menu-item a.selected {
            color: #85CC36 !important;
        }

        .main-menu .menu-item a:active,
        .main-menu .menu-item a:focus {
            color: #85CC36 !important;
        }

        .hide-visually {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            border: 0 !important;
        }

        .button {
            background-color: rgb(230, 177, 152) !important;
            color: #000 !important;
            padding: 15px 28px !important;
            border: none !important;
            border-radius: 5px !important;
            cursor: pointer !important;
            transition: background-color 0.3s !important;
        }

        .button:hover {
            background-color: rgba(230, 230, 152, 0.8) !important;
        }

        @media (max-width: 768px) {
            #toggle-menu {
                display: inline-block !important;
            }
        }
    </style>
</head>
<body>
<header id="masthead" class="site-header responsive-max-width has-title-and-tagline has-menu" role="banner">
            <div style="text-align: center;">
                <!-- .cambio de fondo izquierdo merrash-->
                <a href="{{ route('welcome') }}" rel="home" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px; color: #7D47C1; display: inline-block;">
                    <img src="img/brand/FONDO-1.png" alt="Merrash Logo" style="vertical-align: middle; width: 90px; transform: translateX(80px);" />
                </a>
            </div>
    <!-- .site-branding -->
    <nav id="site-navigation" class="main-navigation" aria-label="Main Navigation">
        <input type="checkbox" role="button" aria-haspopup="true" id="toggle"  class="hide-visually">
        <label for="toggle" id="toggle-menu" class="button">
            Menu <span class="dropdown-icon open"></span>
            <span class="dropdown-icon close">&times;</span>
            <span class="hide-visually expanded-text">expanded</span>
            <span class="hide-visually collapsed-text">collapsed</span>
        </label>
        <div class="main-menu-container">
            <ul id="menu-primary-menu" class="main-menu" aria-label="submenu">
                <li class="menu-item">
                    <a href="{{ route('welcome') }}"
                       onmouseover="this.style.color='#85CC36';"
                       onmouseout="if (!this.classList.contains('selected')) { this.style.color='#784F96'; }"
                       onclick="this.style.color='#85CC36'; this.classList.add('selected');">
                        Inicio
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('about') }}"
                       onmouseover="this.style.color='#85CC36';"
                       onmouseout="if (!this.classList.contains('selected')) { this.style.color='#784F96'; }"
                       onclick="this.style.color='#85CC36'; this.classList.add('selected');">
                        Acerca De Nosotros
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('services.available') }}"
                       onmouseover="this.style.color='#85CC36';"
                       onmouseout="if (!this.classList.contains('selected')) { this.style.color='#784F96'; }"
                       onclick="this.style.color='#85CC36'; this.classList.add('selected');">
                        Servicios
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('contacto') }}"
                       onmouseover="this.style.color='#85CC36';"
                       onmouseout="if (!this.classList.contains('selected')) { this.style.color='#784F96'; }"
                       onclick="this.style.color='#85CC36'; this.classList.add('selected');">
                        Testimonios
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('contacto') }}"
                       onmouseover="this.style.color='#85CC36';"
                       onmouseout="if (!this.classList.contains('selected')) { this.style.color='#784F96'; }"
                       onclick="this.style.color='#85CC36'; this.classList.add('selected');">
                        Contacto
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('login') }}"
                       onmouseover="this.style.color='#85CC36';"
                       onmouseout="if (!this.classList.contains('selected')) { this.style.color='#784F96'; }"
                       onclick="this.style.color='#85CC36'; this.classList.add('selected');">
                        Iniciar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- #site-navigation -->
</header>
</body>
</html>
