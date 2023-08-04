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
	<title>Comunidad SOC | {{ $usuario->nombre }}</title>

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
	<style>
		svg{
			width: 100%;
		}
		.buttons-s{
			padding: 0.5rem 0.8rem;
		}
		.fa-chevron-down{
			position: absolute;
		    right: 10px;
		    top: 15px;
		}
		.back-g2{
			background: #F2F2F2;
		}
		.rotate{
			transform: rotate(180deg);;
		}
		select{
			    font-size: 1rem!important;
			    color: #000;
		}
		input[type="submit"]{
			cursor: pointer;
		}
		svg{
			width: 150px;
    		max-height: 150px;
		}
		@media(max-width:500px){
        .logo-m{
            width: 55%!important;
        }
    }
		svg g {
    fill: #4DD176!important;
}
	</style>
</head>
<body>
	<header class="fixed w-full inse-x-0 top-0 z-50">
		<div class="container mx-auto max-w-4xl rounded-b-lg bg-primary text-white py-4 md:pl-14 md:pr-6 px-2">
			<div class="flex justify-between items-center">
				<figure class="md:w-auto w-2/5 logo-m"><img class="h-11 md:w-auto w-full object-contain" src="{{ url('img/Eslogan_tipeado_blanco.png') }}" alt=""></figure>
				<div class="">
					@if($usuario->telefono != null)
						<a href="tel:{{ $usuario->telefono }}" class="inline-block rounded-full border border-white buttons-s ml-2"><i class="fa-solid fa-phone"></i></a>
					@else
					@endif
					
					<a href="mailto:{{ $usuario->email }}" class="inline-block rounded-full border border-white buttons-s ml-2"><i class="fa-solid fa-envelope"></i></a>

					@if($usuario->telefono != null)
						<a href="https://api.whatsapp.com/send?phone={{ $usuario->telefono }}" class="inline-block rounded-full border border-white buttons-s ml-2"><i class="fa-brands fa-whatsapp"></i></a>
					@else
					@endif
					
				</div>
			</div>
		</div>
	</header>
	<div class="container mx-auto max-w-4xl mt-24  md:px-14 px-2">
		<section class="flex justify-end items-end md:-mx-14 -mx-4 pt-4 pb-4 md:px-0 px-4 relative rounded-t-lg">
			<span class="bg-cover absolute inset-0 z-0" style="background: #016D4E"></span>
			<div class="md:w-2/3 w-full text-primary relative">
				<p class="text-third text-right pr-4" style="color: #fff; font-weight: 100"><strong style="font-weight: bold;">¡Juntos,</strong> lo hacemos real!</p>

				<img src="{{ url('img/cintillo_3.jpg') }}" style="    position: absolute;
    right: 16px;
    bottom: -10px;
    width: 100px;" alt="">
				<h1 class="md:text-2xl text-xl" style="color: #fff">{{ $usuario->nombre }}</h1>
				<h2 class="font-light md:text-lg mb-4" style="color: #fff">{{ $usuario->puesto }}</h2>
				<p style="color: #fff; font-weight: 100"><i class="fa-solid fa-envelope"></i> {{ $usuario->email }}</p>
				@if($usuario->telefono != null)
						<p style="color: #fff; font-weight: 100"><i class="fa-solid fa-phone"></i> {{ $usuario->telefono }}</p>
					@else
					@endif
				
			</div>
		</section>
		<section class="flex flex-wrap">
			<div class="md:w-1/3 md:inline-block flex md:flex-nowrap flex-wrap items-center">
				<figure class="block md:-mt-28 -mt-5 relative z-20" style="margin-left: auto; margin-right: auto;"><img class="md:w-56 md:h-56 w-40 h-40 object-cover rounded-full md:border-2 border-2 border-primary bg-white" src="{{ $usuario->imagen }}" alt=""></figure>
				<!--
				<div class="mx-auto block w-40">
					<strong class="text-nobel block leading-none md:text-xl text-lg">
						Advanced
						<i class="fa fa-star"></i>
					</strong>
					<small>Hipotecario</small>
				</div>
				-->
				<div class="text-center md:w-56 w-full mt-4 mb-4">
					<figure class="inline-block mb-4">{{ getQr($usuario->id) }}</figure>
					<a href="{{ url('/micrositio/dowload/') }}/{{ $usuario->id }}"><small class="text-wet-asphalt block">Guarda mi contacto</small></a>
				</div>
			</div>
			<div class="md:w-2/3 rounded-lg mt-1 pt-3 text-primary md:text-lg main-description mb-4" style="flex-grow: 1!important;">
				<p><span style="color: #4f4f4f">{{ $usuario->descripcion }}<span></p>
				<p style="color: #4f4f4f">Conoce todo lo que ofrece SOC:</p>
                <div class="flex" style="flex-max-height: 60px; justify-content: space-around; ">
                	<a href="https://socasesores.com/" target="_blank" style="border-radius: 10px; background: #fff; border: 1px solid #059DEF; display: inline-block;  line-height: 1.7; padding: .6rem 1.5rem; color: #059DEF">Ir al sitio web</a>
                	<a href="https://blog.socasesores.com/"  target="_blank" style="border-radius: 10px; background: #fff; border: 1px solid #059DEF; display: inline-block;  line-height: 1.7; padding: .6rem 1.5rem; color: #059DEF;">Visita el blog</a>
                </div>
              
                @if($usuario->formulario == "Sí")
                	<div class="flex mt-4" style="justify-content: space-around; flex-direction: column; border: 1px solid #059DEF; border-radius: 15px;">
                	@if(isset($message))
                		<div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 mb-4 mt-4" role="alert">
						  <p class="font-bold">{{$message}}</p>
						</div>
                	@else
                	@endif


                	<a href="" id="asesoriaForm" style="border-radius: 10px; background: #fff; border: 1px solid #059DEF; display: inline-block;  line-height: 1.7; padding: .6rem 1.5rem; color: #fff; background: #059DEF; text-align: center; display: block; width: 100%; position: relative;">Quiero asesoría <i class="fa-solid fa-chevron-down"></i></a>
                	<form action="{{ route('sendMail') }}" method="post" class="p-6 hidden">
                		@csrf
                		<input type="text" class="hidden" name="email_cliente" value="{{ $usuario->email }}">
                		<input type="text" class="hidden" name="url" value="{{ $usuario->url }}">
                		<div class="mb-4">
					      <label class="block text-gray-700 text-sm mb-2" for="username">
					        Nombre
					      </label>
					      <input class="back-g2 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="name" type="text">
					      <div class="flex flex-wrap -mx-3 mt-4 mb-6">
						    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						      <label class="block text-gray-700 text-sm mb-2" for="grid-first-name">
						        Teléfono
						      </label>
						      <input class="back-g2 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="telefono" id="grid-first-name" type="text">
						      
						    </div>
						    <div class="w-full md:w-1/2 px-3">
						      <label class="block text-gray-700 text-sm mb-2" for="grid-last-name">
						        Correo electrónico
						      </label>
						      <input class="back-g2 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="grid-last-name" name="email" type="text">
						    </div>
						  </div>
						  <div class="flex flex-wrap -mx-3 mt-4 mb-6">
						  	<div class="w-full md:w-1/2 px-3">
						      <label class="block text-gray-700 text-sm mb-2" for="grid-last-name">
						        Línea de negocio
						      </label>
						      <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="linea" name="linea">
						      				
                                            
                                            @if($usuario->linea == "Crédito Hipotecario")
                                            	<option value="Crédito Hipotecario">Crédito Hipotecario</option>
                                            @elseif($usuario->linea == "Crédito Empresarial")
                                            	<option value="Crédito Empresarial">Crédito Empresarial</option>
                                            @elseif($usuario->linea == "Crédito de Auto")
                                            	<option value="Crédito de Auto">Credito de Auto</option>
                                            @elseif($usuario->linea == "Seguros")
                                            	<option value="Seguros">Seguros</option>
                                            @elseif($usuario->linea == "Venta cruzada")
                                            	<option value="" selected hidden="">Selecciona una línea</option>
	                                            <option value="Crédito Hipotecario">Crédito Hipotecario</option>
	                                            <option value="Crédito Empresarial">Crédito Empresarial</option>
	                                            <option value="Seguros">Seguros</option>
	                                            <option value="Crédito de Auto">Credito de Auto</option>
                                            @else
                                            	<option value="" selected hidden="">Selecciona una línea</option>
	                                            <option value="Crédito Hipotecario">Crédito Hipotecario</option>
	                                            <option value="Crédito Empresarial">Crédito Empresarial</option>
	                                            <option value="Seguros">Seguros</option>
	                                            <option value="Crédito de Auto">Credito de Auto</option>
                                            @endif
                                        </select>
						    </div>
						    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
						      <label class="block text-gray-700 text-sm mb-2" for="grid-first-name">
						        Producto
						      </label>
						  
						      <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="producto" name="producto">
                                            <option value="" selected="" hidden="">Selecciona un producto</option>
                                            <option class="hipotecario hidden" value="Adquisición de vivienda">Adquisición de vivienda</option>
                                            <option class="hipotecario hidden" value="Construcción">Construcción</option>
                                            <option class="hipotecario hidden" value="Cambio de hipoteca">Cambio de hipoteca</option>
                                            <option class="hipotecario hidden" value="Adquisición de terreno">Adquisición de terreno</option>
                                            <option class="hipotecario hidden" value="Terreno + Construcción">Terreno + Construcción</option>
                                            <option class="hipotecario hidden" value="Preventa">Preventa</option>
                                            <option class="hipotecario hidden" value="Liquidez">Liquidez</option>
                                            <option class="hipotecario hidden" value="Liquidez + sustitución">Liquidez + sustitución</option>
                                            <option class="hipotecario hidden" value="Renovación / Remodelación">Renovación / Remodelación</option>

                                            <option class="empresarial hidden" value="Auto flotillas">Auto flotillas</option>
                                            <option class="empresarial hidden" value="Seguros PyME">Seguros PyME</option>
                                            <option class="empresarial hidden" value="Anticipo de ventas">Anticipo de ventas</option>
                                            <option class="empresarial hidden" value="PyME Revolvente">PyME Revolvente</option>
                                            <option class="empresarial hidden" value="Tarjeta de crédito">Tarjeta de crédito</option>
                                            <option class="empresarial hidden" value="Simple">Simple</option>
                                            <option class="empresarial hidden" value="Crédito hipotecario empresarial">Crédito hipotecario empresarial</option>
                                            <option class="empresarial hidden" value="Arrendamiento">Arrendamiento</option>
                                           
                                            <option class="seguros hidden" value="Seguro de Vida">Seguro de Vida</option>
                                            <option class="seguros hidden" value="Gastos Médicos mayores">Gastos Médicos mayores</option>
                                            <option class="seguros hidden" value="Protección del hogar">Protección del hogar</option>
                                            <option class="seguros hidden" value="Seguro de Auto">Seguro de Auto</option>
                                            <option class="seguros hidden" value="Vida para empresas">Vida para empresas</option>
                                            <option class="seguros hidden" value="Gastos médicos mayores para empresas">Gastos médicos mayores para empresas</option>
                                           
                                            <option class="autos hidden" value="Adquisición de moto">Adquisición de moto</option>
                                            <option class="autos hidden" value="Adquisición de auto">Adquisición de auto</option>
                                            <option class="autos hidden" value="Sustitución de crédito de auto">Sustitución de crédito de auto</option>
                                        </select>
						      
						    </div>

						  	<div class="w-full px-3 mb-6 md:mb-0">
						    	<label class="block text-gray-700 text-sm mb-2 mt-4" for="exampleFormControlTextarea1">
							        Comentarios
							    </label>
						    	<textarea class="back-g2 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlTextarea1" name="comentarios" rows="3"></textarea>
						    </div>
						    <div class="flex w-full items-center justify-center mt-4">
        						<input type="submit" value="Enviar" style="text-align: center; background: #4DD176; color: #fff; padding: .3rem 3rem; border-radius: 10px;">
					        </div>
						  </div>
					    </div>
                	</form>
                </div>
                @else
                @endif
                
			</div>
		</section>

	
	</div>
	@if(isset($usuario->twitter) || isset($usuario->linkedin) || isset($usuario->facebook) || isset($usuario->instagram))
		<section class="container max-w-4xl mt-16 px-9 md:py-3 py-6 mb-2 bg-primary md:text-lg main-description" style="margin: 0 auto; margin-top: 2rem; background: #F2F2F2;">
			<div class="flex justify-start">
				<h2 class="font-bold text-white text-center md:pl-8" style="color: #47B06A; font-weight: normal;">Sígueme en: </h2>
				@if(isset($usuario->twitter))
					<a href="{{ $usuario->twitter }}" target="_blank" style="background: #47B06A; color: #fff" class="rounded-full bg-white text-primary w-8 h-8 text-center fab fa-twitter p-2 mx-4"></a>
				@endif

				@if(isset($usuario->linkedin))
					<a href="{{ $usuario->linkedin }}" target="_blank" style="background: #47B06A;  color: #fff" class="rounded-full bg-white text-primary w-8 h-8 text-center fab fa-linkedin-in p-2 mx-4"></a>
				@endif

				@if(isset($usuario->facebook))
					<a href="{{ $usuario->facebook }}" target="_blank" style="background: #47B06A;  color: #fff" class="rounded-full bg-white text-primary w-8 h-8 text-center fab fa-facebook-f p-2 mx-4"></a>
				@endif

				@if(isset($usuario->instagram))
					<a href="{{ $usuario->instagram }}" target="_blank"  style="background: #47B06A;  color: #fff" class="rounded-full bg-white text-primary w-8 h-8 text-center fab fa-instagram p-2 mx-4"></a>
				@endif
				
			</div>
		</section>
	@else

	@endif
	
		<section class="container max-w-4xl  mt-16 px-9 md:py-1 py-6 bg-primary md:text-lg main-description" style="margin: 0 auto;">
			<h2 class="font-normal text-white text-center">© 2023 SOC Líderes en Asesoría Financiera </h2>
		</section>
	<!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<!-- Custom JS -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="{{ url('js/custom.js') }}"></script>
	<style>
	    .fa-plus:before{
	        content:'+';
	    }
        .fa-minus:before{
            content:'—';
            content:'-';
            font-size:1.35em;
        }
        .collapsible-header span + span{
            font-size:2em;
            font-weight:bolder;
            line-height:1rem;
            color:var(--primary-color);
        }
	</style>
	<script>
		$( document ).ready(function() {
		    var option = $("#linea").find("option:selected").attr('value');

		       if(option == "Crédito Hipotecario"){
		       	$("#producto option").addClass("hidden");
		       	$(".hipotecario").removeClass("hidden");

		       }else if(option == "Crédito Empresarial"){
		       	$("#producto option").addClass("hidden");
		       	$(".empresarial").removeClass("hidden");

		       }else if(option == "Seguros"){
		       	$("#producto option").addClass("hidden");
		       	$(".seguros").removeClass("hidden");

		       }else if(option == "Crédito de Auto"){
		       	$("#producto option").addClass("hidden");
		       	$(".autos").removeClass("hidden");

		       }else{

		       }

		});
		$('#linea').change(function(){
	       var option = $(this).find("option:selected").attr('value');

	       if(option == "Crédito Hipotecario"){
	       	$("#producto option").addClass("hidden");
	       	$(".hipotecario").removeClass("hidden");

	       }else if(option == "Crédito Empresarial"){
	       	$("#producto option").addClass("hidden");
	       	$(".empresarial").removeClass("hidden");

	       }else if(option == "Seguros"){
	       	$("#producto option").addClass("hidden");
	       	$(".seguros").removeClass("hidden");

	       }else if(option == "Crédito de Auto"){
	       	$("#producto option").addClass("hidden");
	       	$(".autos").removeClass("hidden");

	       }else{

	       }


	    });
	    $('.collapsible-header').click(function(){
	        $(this).find('span + span').toggleClass('fa-plus').toggleClass('fa-minus');
	        $(this).siblings('.collapsible-body').slideToggle();
	        $(this).parent().siblings().find('.collapsible-body').slideUp();
	        $(this).parent().siblings().find('span + span').addClass('fa-plus').removeClass('fa-minus');
	    });
	</script>
</body>
</html>

