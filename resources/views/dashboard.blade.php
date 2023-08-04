<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center" style="justify-content: center;">
                <div class="col-md-6">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">

                @if(isset($usuarios) && Auth::user()->role == "admin")
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Tarjeta</th>
                          <th>Editar</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                              <th scope="row">{{ $usuario->id }}</th>
                              <td>{{ $usuario->nombre }}</td>
                              <td> {{ $usuario->email }}</td>
                              <td> <a href="{{ url('/micrositio/') }}/{{ $usuario->url }}">Tarjeta</a></td>
                              <td> <a href="{{ url('/micrositio/editar') }}/{{ $usuario->id }}">Editar</a></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                @else

                    <x-guest-layout>
                     <p style="text-align: center;">Link de tarjeta: <br><a style="text-decoration: underline;" href="http://socasesores.com/comunidad/{{ Auth::user()->url }}">http://socasesores.com/comunidad/{{ Auth::user()->url }}</a></p>
                        <form method="POST" action="{{ route('editDirector') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                            <!-- Nombre -->
                            <div>
                               <div class="flex"><label for="name" value="Nombre" />Nombre<span style="color: red;">*</span></div>
                                <input id="name" class="block mt-1 w-full form-control" type="text" name="name" value="{{ Auth::user()->nombre }}" required autofocus/>
                               
                            </div>

                            <!-- Puesto -->
                            <div class="mt-4">
                                <div class="flex"><label for="puesto" value="Puesto" />Puesto<span style="color: red;">*</span></div>
                                <input id="puesto" class="block mt-1 w-full form-control" type="text" name="puesto" value="{{ Auth::user()->puesto }}"  required />
                            </div>

                            <!-- Descripcion -->
                            <div class="mt-4">
                                <div class="flex"><label for="descripcion" value="Sobre mí" />Sobre mí<span style="color: red;">*</span></div>
                                <textarea id="descripcion" name="descripcion" class="form-control" value="{{ Auth::user()->descripcion }}" required>{{ Auth::user()->descripcion }}</textarea>
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4"> 
                                <label for="email" value="Email">Email</label>
                                <input id="email" class="block mt-1 w-full form-control" type="email" value="{{ Auth::user()->email }}" name="email" />
                            </div>

                            <!-- Telefono -->
                            <div class="mt-4">
                                <label for="telefono" value="Teléfono móvil">Teléfono móvil</label>
                                <input id="telefono" class="block mt-1 w-full form-control" type="text" value="{{ Auth::user()->telefono }}" name="telefono"  />
                            </div>

                             <!-- facebook -->
                            <div class="mt-4">
                                <label for="facebook" value="Url facebook">Url facebook</label>
                                <input id="facebook" class="block mt-1 w-full form-control" value="{{ Auth::user()->facebook }}" type="text" name="facebook" />
                            </div>

                            <!-- twitter -->
                            <div class="mt-4">
                                <label for="twitter" value="Url twitter">Url twitter</label>
                                <input id="twitter" class="block mt-1 w-full form-control" value="{{ Auth::user()->twitter }}" type="text" name="twitter" />
                            </div>

                            <!-- instagram -->
                            <div class="mt-4">
                                <label for="instagram" value="Url instagram">Url instagram</label>
                                <input id="instagram" class="block mt-1 w-full form-control" value="{{ Auth::user()->instagram }}" type="text" name="instagram" />
                            </div>

                            <!-- linkedin -->
                            <div class="mt-4">
                                <label for="linkedin" value="Url linkedin">Url linkedin</label>
                                <input id="linkedin" class="block mt-1 w-full form-control" value="{{ Auth::user()->linkedin }}" type="text" name="linkedin" />
                            </div>


                            <!-- Foto -->
                            <div class="mt-4">
                                <img src="{{ Auth::user()->imagen }}" alt="" style="max-width: 150px;">
                                <label for="avatar" value="Foto de perfil" class="mb-2" style="line-height: 2;">Foto de perfil</label>
                                <div>
                                    <input type="file" name="avatar">
                                </div>


                            </div>

                            @if(Auth::user()->formulario == "Sí")
                                <div class="flex justify-center mt-4" style="flex-direction: column;">
                                  <!--First radio-->
                                  <label for="">¿Quieres mostrar formulario de asesoría?</label>
                                  <div class="flex" style="justify-content: space-around;">
                                      <div class="mb-[0.125rem] mr-4 flex min-h-[1.5rem] pl-[1.5rem]">
                                        <input
                                          class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#4DD176] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#4DD176]"
                                          type="radio"
                                          name="inlineRadioOptions" checked
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
                                          name="inlineRadioOptions"
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
                                <div class="mt-2" id="formArea">
                                    <label class="block text-gray-700 text-sm mb-2" for="grid-last-name">
                                        Área
                                    </label>
                                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="area">
                                        <option value="{{ Auth::user()->area }}" selected="" hidden>{{ Auth::user()->area }}</option>
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
                                        <option value="{{ Auth::user()->linea }}" selected="" hidden>{{ Auth::user()->linea }}</option>
                                        <option value="Crédito Hipotecario">Crédito Hipotecario</option>
                                        <option value="Crédito Empresarial">Crédito Empresarial</option>
                                        <option value="Crédito de Auto">Crédito de Auto</option>
                                        <option value="Seguros">Seguros</option>
                                        <option value="Venta cruzada">Venta cruzada</option>
                                    </select>
                                </div>
                            @else
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
                                    <option value="" selected="" disabled>Selecciona una línea</option>
                                    <option value="Adquisición de vivienda">Hipotecario</option>
                                    <option value="Construcción">Empresarial</option>
                                    <option value="Cambio de hipoteca">Auto</option>
                                    <option value="Seguros">Seguros</option>
                                    <option value="Adquisición de terreno">Franquicias</option>
                                    <option value="">Venta digital </option>
                                    <option value="">Marketing</option>
                                </select>
                                <label class="block text-gray-700 text-sm mb-2 mt-4" for="grid-last-name">
                                    Línea de negocio
                                </label>
                                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="linea">
                                    <option value="" selected="" disabled>Selecciona una línea</option>
                                    <option value="Adquisición de vivienda">Crédito Hipotecario</option>
                                    <option value="Construcción">Crédito Empresarial</option>
                                    <option value="Cambio de hipoteca">Crédito de Auto</option>
                                    <option value="Seguros">Seguros</option>
                                </select>
                            </div>

                            @endif
                            

                            <div class="flex items-center justify-end mt-4">

                                <button class="ml-4 btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </form>
                    </x-guest-layout>

                @endif
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


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
