<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="https://socasesores.com/img/favicon.png" />
        <title>Comunidad SOC</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/ab58011517.js" crossorigin="anonymous"></script>
        <style type="text/css">
            form{
            min-width: 250px;
        }
            .max-content{
                max-width: 800px;
                width: 100%;
            }
            input::placeholder {
                font-size: .8rem;
            }
            body{
                background-image: url({{ url('img/fondo_inicio.jpg') }});
                background-repeat: no-repeat;
                background-size: contain;
            }
            /* Tooltip container */
.tooltip {
  position: relative;
  display: inline-block;
  
}

/* Tooltip text */
.tooltip .tooltiptext {
  visibility: hidden;
    width: 220px;
    background-color: #555;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 0%;
    margin-left: -102px;
    opacity: 0;
    transition: opacity 0.3s;
}

/* Tooltip arrow */
.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
            @media(max-width: 500px){
                .inicio-f{
                    flex-direction: column!important
                }
                body{
                    background-size: cover;
                }
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/administrador/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: #079DEF">Editar</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: #079DEF">Editar</a>

                        @if (Route::has('register-director') && Auth::check() && Auth::user()->role == 0)
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="color: #079DEF">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="mx-auto max-content p-6 lg:p-8">
                <div class="flex justify-center items-center flex-row inicio-f" style="justify-content: space-around;">
                    <div>
                       <img src="{{ url('img/logo-soc-green.png') }}" style="max-width: 250px" alt="" class="img-fluid mb-4"> 
                    </div>
                    <div>
                        <p style="color: #016D4E; font-size: 1.2rem; text-align: center; font-weight: bold;">Ingresa para crear<br> tu tarjeta digital</p>
                        <form action="{{ route('register-user') }}" method="get">
                            <input for="telefono" class="mt-4" value="Correo electrónico" />
                            <input id="email" style="background: #f5f5f5;     padding: 5px;" class="block mt-1 w-full" type="text" name="email"  required />

                             
                             <div style="position: relative;">
                                <label for="password" class="mt-4" value="Contraseña" />
                                 <div class="tooltip" style="    position: absolute;
        top: 7px;
    right: -25px;">
                                    <i class="fa-solid fa-circle-question" style="color: #FF7150"></i>
                                  <span class="tooltiptext">Crea tu contraseña para poder acceder a la plataforma</span>
                                </div>
                             </div>
                             <input id="password" style="background: #f5f5f5;    padding: 5px;" class="block mt-1 w-full" type="password" name="password"  required />
                             
                            
                            
                            
                            

                             <input type="submit" value="Ingresar" class="mt-4" style="background-color: #049DEF; color: #fff; border-radius: 4px;width: 250px;
    padding: 0.3rem; text-align: center;">
                           
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
