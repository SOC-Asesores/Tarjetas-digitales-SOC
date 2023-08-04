<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://socasesores.com/img/favicon.png" />
    <!--[if lt IE 9]>
        <script>
            var e = ("abbr,article,aside,audio,canvas,datalist,details," +
            "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
            "progress,section,time,video").split(',');
            for (var i = 0; i < e.length; i++) {
                document.createElement(e[i]);
            }
        </script>
    <![endif]-->
    <title>Comunidad SOC</title>

    <!-- TALWIND CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ url('css/custom.css') }}">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <script src="https://kit.fontawesome.com/ab58011517.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4 pt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
                          <div class="text-center">
                 <img src="{{ url('images/main-logo.png') }}" style="max-width: 250px; margin: 0 auto" alt="" class="img-fluid mb-4"></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #079DEF; border-color: #079DEF">
                                    Entrar
                                </button>

                               
                            </div>
                        </div>
                    </form>
               
            
        </div>
    </div>
</div>
</body>
</html>







