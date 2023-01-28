<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Mantenimiento</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css"> -->
</head>
<style lang="scss">
	.redondeado
	{
		border-radius: 6px;
	}
	.bg-azul{
		background-color: #0066b2!important;
	
	}
	.fieldset
	{	
		border: solid 1px #080808;
		background-color:blue !important;
	}
	.altoBoton{
		padding: 2px 8px; font-size: 12px;
	}
	.verticalText {
    writing-mode: vertical-lr;
    transform: rotate(270deg);
    }
    .fondo{
        background-color: #696969;
        color: #ffffff;
    }
    .amarillo{
        background-color: #ffff06;
    }
    .verdeopaco{
        background-color: #7aec66;
    }
    .verde{
        background-color: #00ff00;
    }
    .celeste{
        background-color: #52d9f5;
    }
	.dropbox {
		outline: 2px dashed grey; /* the dash box */
		outline-offset: -10px;
		background: lightcyan;
		color: dimgray;
		padding: 10px 10px;
		min-height: 200px; /* minimum height */
		position: relative;
		cursor: pointer;
	}
	/* input[type="text"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
	} */
	.noPadding td {
		padding: 0;
	}
	.noPadding td input 
	{
		margin: 0;
	}
	.input-file {
		opacity: 0; /* invisible but it's there! */
		width: 100%;
		height: 200px;
		position: absolute;
		cursor: pointer;
	}

	.dropbox:hover {
		background: lightblue; /* when mouse over to the drop zone, change color */
	}

	.dropbox p {
		font-size: 1.2em;
		text-align: center;
		padding: 50px 0;
	}
	.t10{
		font-size: 10px;
	}
	.t11{
		font-size: 11px;
	}
	.t12{
		font-size: 12px;
	}
	.t13{
		font-size: 13px;
	}
	.t14{
		font-size: 14px;
	}
	.t15{
		font-size: 15px;
	}
	.t16{
		font-size: 16px!important;
	}
	.t17{
		font-size: 17px;
	}
</style>
@php
	use App\docente;
	use App\alumno;
	$Anio = date("Y");
	// $nombre = "";
	$dni = Auth::user()->user;
	if(Auth::user()->tipo == 2)
	{
		
		$objDocente = Docente::where("DNI",$dni)->first();
		$nombre = isset($objDocente) ? $objDocente->Nombre : 'Docente'; 
		// $docentes = DB::select("select Nombre as docente from docente where DNI = $dni");
	}elseif (Auth::user()->tipo == 3) 
	{
		$objAlumno = Alumno::where("DNI",$dni)->first();
		$nombre = isset($objAlumno) ? $objAlumno->Nombre : 'Alumno'; 
	}
	$nombre = isset($nombre) ? $nombre : Auth::user()->user;
@endphp
{{-- layout-navbar-fixed  --}}
<body class="hold-transition sidebar-mini layout-fixed layout-footer-fixed">
    <div class="wrapper" id="app">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-fixed-top navbar-primary navbar-dark">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
				</li>
			</ul>
			{{-- <div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Dropdown button
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
			  </div> --}}
			<!-- Right navbar links -->
				<!-- Messages Dropdown Menu -->
				<a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					@switch(Auth::user()->tipo)
						@case(1)
							Administrador({{Auth::user()->user}}) <span class="caret"></span>	
							@break
						@case(2)
							Jefe Soporte({{$nombre}}) <span class="caret"></span>	
							@break
						@case(3)
							Soporte({{$nombre}}) <span class="caret"></span>	
							@break
						@case(4)
							Cliente({{Auth::user()->user}}) <span class="caret"></span>	
							@break			
						@default
							
					@endswitch
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
							{{ __('Cerrar Sesión') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
				</div>
		</nav>
    
		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			
			<a href="/home" class="brand-link text-center">
				<span class="brand-text font-weight-light">Sistema de Mantenimiento</span>
			</a>
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					@php
						$num = isset(\Auth::user()->avatar) ? \Auth::user()->avatar : 1;
						$avatar = "../../dist/img/avatar$num.png";
					@endphp
					<div class="image">
						<img src="{{$avatar}}" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">{{$nombre}}</a>
					</div>
				</div> 
    
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						@switch(Auth::user()->tipo)
							@case(1)
							<li class="nav-item has-treeview">
								<a href="home" class="nav-link active">
									<i class="nav-icon fa fa-user-circle"></i>
									<p>Dashboard</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-cogs"></i>
									<p>
										Configuración
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/usuarios" class="nav-link">
										    <i class="fa fa-users"></i>
											<p>Usuarios</p>
										</router-link>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-list"></i>
									<p>
										Reportes
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/alumnos" class="nav-link">
										    <i class="fa fa-user"></i>
											<p>Todas las atenciones</p>
										</router-link>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-whatsapp"></i>
									<p>
										WhatsApp
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/instancias" class="nav-link">
										    <i class="fa fa-cog"></i>
											<p>Instancias</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/mensajes" class="nav-link">
										    <i class="fa fa-whatsapp"></i>
											<p>Mensajería</p>
										</router-link>
									</li>
								</ul>
							</li>
							
							@break
							@case(2)
							<li class="nav-item has-treeview">
								<a href="home" class="nav-link">
									<i class="nav-icon fa fa-user-circle"></i>
									<p>Perfil</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Registro
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/registro" class="nav-link">
									      <i class="fa fa-address-book nav-icon text-primary"></i>
											<p>Registro de notas</p>
										</a>
									</li>
									<li class="nav-item">
										<router-link to="/notas" class="nav-link">
									      <i class="fa fa-address-book nav-icon text-success"></i>
											<p>Visualizar notas</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Tareas
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/tareas" class="nav-link">
									      <i class="fa fa-upload nav-icon text-primary"></i>
											<p>Subir Tareas</p>
										</a>
									</li>
									<li class="nav-item">
										<router-link to="/revisar" class="nav-link">
									      <i class="fa fa-download nav-icon text-danger"></i>
											<p>Revisar Tareas</p>
										</a>
									</li>
								</ul>
							</li>
							@break
							@case(3)
							<li class="nav-item has-treeview">
								<a href="{{asset('home')}}" class="nav-link">
									<i class="nav-icon fa fa-user-circle"></i>
									<p>Perfil</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="{{asset('mihorario')}}" class="nav-link">
									<i class="nav-icon fa fa-calendar"></i>
									<p>horario</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="{{asset('miscursos')}}" class="nav-link">
									<i class="nav-icon fa fa-list"></i>
									<p>Cursos</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="{{asset('boletainformativa')}}" target="_blank" class="nav-link">
									<i class="nav-icon fa fa-list"></i>
									<p>Boleta de notas</p>
								</a>
							</li>
							@break
							@case(4)
							<li class="nav-item has-treeview">
								<a href="home" class="nav-link">
									<i class="nav-icon fa fa-user-circle"></i>
									<p>Perfil</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Asistencia
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/asistencia" class="nav-link">
											<i class="fa fa-address-book nav-icon"></i>
											<p>Asistencia</p>
										</router-link>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
									<a href="#" class="nav-link">
										<i class="nav-icon fa fa-folder"></i>
										<p>
											Comportamiento
											<i class="fa fa-angle-right right"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<router-link to="/comportamiento" class="nav-link">
												<i class="fa fa-eye"></i>
												<p>Comportamiento</p>
											</router-link>
										</li>
									</ul>
								</li>
							
							@break
							@case(5)
							<li class="nav-item has-treeview">
								<a href="home" class="nav-link">
									<i class="nav-icon fa fa-list text-success"></i>
									<p>Tareas de docentes</p>
								</a>
							</li>
							@break
						@endswitch
					</ul>
				</nav>
			</div>
		</aside>
    
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 600px;">
			<!-- Main content -->
			<section class="content">
				{{-- <section class="content mt-4"> --}}
                @yield('content')
			</section>
		</div>
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Versión</b> 1.0
			</div>
			<strong>Copyright © {{$Anio}} <a href="https://wa.me/51977252147?text=hola%20necesito%20ayuda%20con%20el%20sistema" target="_blank">Sistema de mantenimiento</a>.</strong> all rights reserved
		</footer>
    </div>
	<script src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript">
		function filterFloat(evt,input){
			// Backspace = 8, Enter = 13, ‘0' = 48, ‘9' = 57, ‘.’ = 46, ‘-’ = 43
			var key = window.Event ? evt.which : evt.keyCode;    
			var chark = String.fromCharCode(key);
			var tempValue = input.value+chark;
			if(key >= 48 && key <= 57){
				if(filter(tempValue)=== false){
					return false;
				}else{       
					return true;
				}
			}else{
					if(key == 8 || key == 13 || key == 0) {     
						return true;              
					}else if(key == 46){
						if(filter(tempValue)=== false){
							return false;
						}else{       
							return true;
						}
					}else{
						return false;
					}
			}
		}
		function filter(__val__){
			var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
			if(preg.test(__val__) === true){
				return true;
			}else{
				return false;
			}
			
		}
	</script>
	<script type="text/javascript">
		function solonumeros(event)
		{
			return event.charCode >= 48 && event.charCode <= 57
		}
		function letrasNotas(e){
			key = e.keyCode || e.which;
			tecla = String.fromCharCode(key).toUpperCase();
			letras = "ABCD";
			especiales = "8-37-38-46-164";
			tecla_especial = false
			for(var i in especiales){
					if(key == especiales[i]){
						tecla_especial = true;
						break;
					}
				}

				if(letras.indexOf(tecla)==-1 && !tecla_especial){
					return false;
				}
		}
		function soloLetras(e){
			key = e.keyCode || e.which;
			tecla = String.fromCharCode(key).toLowerCase();
			letras = " áéíóúabcdefghijklmnñopqrstuvwxyz'";
			especiales = "8-37-38-46-164";

			tecla_especial = false
			for(var i in especiales){
					if(key == especiales[i]){
						tecla_especial = true;
						break;
					}
				}

				if(letras.indexOf(tecla)==-1 && !tecla_especial){
					return false;
				}
		}
		function onlyNumbers(e){
			key = e.keyCode || e.which;
			tecla = String.fromCharCode(key).toLowerCase();
			letras = "1234567890,";
			especiales = "8-37-38-46-164";

			tecla_especial = false
			for(var i in especiales){
					if(key == especiales[i]){
						tecla_especial = true;
						break;
					}
				}

				if(letras.indexOf(tecla)==-1 && !tecla_especial){
					return false;
				}
		}
		function alfa(e){
			key = e.keyCode || e.which;
			tecla = String.fromCharCode(key).toLowerCase();
			letras = " áéíóúabcdefghijklmnñopqrstuvwxyz'1234567890#°.-@,¡?!¿_";
			especiales = "8-37-38-46-164";

			tecla_especial = false
			for(var i in especiales){
					if(key == especiales[i]){
						tecla_especial = true;
						break;
					}
				}

				if(letras.indexOf(tecla)==-1 && !tecla_especial){
					return false;
				}
		}
	</script>	
	{{-- <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script> --}}
</body>
</html>



