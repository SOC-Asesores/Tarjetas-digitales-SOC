<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        [type=radio] {
            color: #4DD176!important;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <form method="POST" action="{{ route('registerDirector') }}" enctype="multipart/form-data">
        @csrf

        <!-- Nombre -->
        <div>
            <div class="flex"><label for="name" value="Nombre" />Nombre<span style="color: red;">*</span></div>
            <input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus/>
            
        </div>

        <!-- Puesto -->
        <div class="mt-4">
            <div class="flex"><label for="puesto" value="Puesto" />Puesto<span style="color: red;">*</span></div>
            
            <input id="puesto" class="block mt-1 w-full form-control" type="text" name="puesto"  required />
        </div>

        <!-- Descripcion -->
        <div class="mt-4">
            <div class="flex"><label for="descripcion" value="Sobre mí" />Sobre mí<span style="color: red;">*</span></div>
            <textarea id="descripcion" name="descripcion" class="form-control"  maxlength="500"  required></textarea>
 
        </div>


        <div class="mt-4 hidden">
            <label for="email" value="Email">Email</label>
            <input id="email" class="block mt-1 w-full form-control" value="{{ $_GET['email'] }}" type="email" name="email" />
        </div>


        <div class="mt-4 hidden">
            <label for="password" value="Password">Password</label>
            <input id="password" class="block mt-1 w-full form-control" value="{{ $_GET['password'] }}" type="password" name="password" />
        </div>

        <!-- Telefono -->
        <div class="mt-4">
            <label for="telefono" value="Teléfono móvil">Teléfono móvil</label>
            <input id="telefono" class="block mt-1 w-full form-control" type="text" name="telefono"  />
        </div>

        <!-- facebook -->
        <div class="mt-4">
            <label for="facebook" value="Url facebook">Url facebook</label>
            <input id="facebook" class="block mt-1 w-full form-control" type="text" name="facebook" />
        </div>

        <!-- twitter -->
        <div class="mt-4">
            <label for="twitter" value="Url twitter">Url twitter</label>
            <input id="twitter" class="block mt-1 w-full form-control" type="text" name="twitter" />
        </div>

        <!-- instagram -->
        <div class="mt-4">
            <label for="instagram" value="Url instagram">Url instagram</label>
            <input id="instagram" class="block mt-1 w-full form-control" type="text" name="instagram" />
        </div>

        <!-- linkedin -->
        <div class="mt-4">
            <label for="linkedin" value="Url linkedin">Url linkedin</label>
            <input id="linkedin" class="block mt-1 w-full form-control" type="text" name="linkedin" />
        </div>

        <!-- Foto -->
        <div class="mt-2">
            <label for="avatar" value="Foto de perfil" class="mb-2" style="line-height: 2;">Foto de perfil</label>
            <input type="file" name="avatar">


        </div>
        <div class="flex justify-center mt-4" style="flex-direction: column;">
          <!--First radio-->
          <label for="">¿Quieres mostrar formulario de asesoría?</label>
          <div class="flex" style="justify-content: space-around;">
              <div class="mb-[0.125rem] mr-4 flex min-h-[1.5rem] pl-[1.5rem]">
                <input
                  class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#4DD176] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#4DD176]"
                  type="radio"
                  name="inlineRadioOptions"
                  id="inlineRadio1"
                  value="Sí" />
                <label
                  class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                  for="inlineRadio1"
                  >Sí</label
                >
              </div>

              <!--Second radio-->
              <div class="mb-[0.125rem] mr-4 inline-block min-h-[1.5rem] pl-[1.5rem]">
                <input
                  class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#4DD176] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#4DD176]"
                  type="radio"
                  name="inlineRadioOptions" checked
                  id="inlineRadio2"
                  value="No" />
                <label
                  class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                  for="inlineRadio2"
                  >No</label
                >
            </div>
          </div>
        </div>
        <div class="mt-2 hidden" id="formArea">
            <label class="block text-gray-700 text-sm mb-2" for="grid-last-name">
                Área
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="area">
                <option value="" selected="" hidden="">Selecciona una línea</option>
                <option value="Hipotecario">Hipotecario</option>
                    <option value="Empresarial">Empresarial</option>
                    <option value="Auto">Auto</option>
                    <option value="Seguros">Seguros</option>
                    <option value="Franquicias">Franquicias</option>
                    <option value="Venta digital">Venta digital </option>
                    <option value="Marketing">Marketing</option>

            </select>
            <label class="block text-gray-700 text-sm mb-2 mt-4" for="grid-last-name">
                Línea de negocio
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="linea">
                <option value="" selected="" hidden="">Selecciona una línea</option>
                <option value="Crédito Hipotecario">Crédito Hipotecario</option>
                    <option value="Crédito Empresarial">Crédito Empresarial</option>
                    <option value="Crédito de Auto">Crédito de Auto</option>
                    <option value="Seguros">Seguros</option>
                    <option value="Venta cruzada">Venta cruzada</option>
            </select>
        </div>

        <div class="flex items-center justify-center mt-4">
        
            <button class="ml-4 btn btn-primary" style="background-color: #059DEF;">
                Crear tarjeta
            </button>
        </div>
    </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $('#inlineRadio1').change(function(){
            selected_value = $("input[name='inlineRadioOptions']:checked").val();
            if(selected_value == "Sí"){
                $("#formArea").removeClass("hidden");
            }else{
               
            }
        });

        $('#inlineRadio2').change(function(){
            selected_value = $("input[name='inlineRadioOptions']:checked").val();
            if(selected_value == "No"){
                $("#formArea").addClass("hidden");
            }else{
              
            }
        });

    </script>
  </body>
</html>



