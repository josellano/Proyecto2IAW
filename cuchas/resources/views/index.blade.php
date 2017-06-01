@extends('base')

@section('imports')

	<link id="estilo1" rel="stylesheet" type="text/css" href="css/estilo1.css">

	<script src="js/manageJson.js" type="text/javascript"></script>
	<script src="js/updateSum.js" type="text/javascript"></script>
	<script src="js/stylechange.js" type="text/javascript"></script>
	<script src="js/canvasdraw.js" type="text/javascript"></script>
	<script src="js/pageInit.js" type="text/javascript"></script>
	<script src="js/defaultModels.js" type="text/javascript"></script>
	<script src="js/imageDownload.js" type="text/javascript"></script>
	<script src="js/reimg.js"></script>
	<script src="js/admin.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection

@section('content')

<body onload="pageInit()">
	<div id="app">
			<nav class="navbar navbar-default navbar-static-top">
					<div class="container">
							<div class="navbar-header">

									<!-- Collapsed Hamburger -->
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
											<span class="sr-only">Toggle Navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									</button>

									<!-- Branding Image -->
									<a class="navbar-brand" href="{{ url('/') }}">
											{{ config('app.name', 'Cuchas') }}
									</a>
							</div>

							<div class="collapse navbar-collapse" id="app-navbar-collapse">
									<!-- Left Side Of Navbar -->
									<ul class="nav navbar-nav">
											&nbsp;
									</ul>

									<!-- Right Side Of Navbar -->
									<ul class="nav navbar-nav navbar-right">
											<!-- Authentication Links -->
											@if (Auth::guest())
													<li><a href="{{ route('login') }}">Login</a></li>
													<li><a href="{{ route('register') }}">Register</a></li>
											@else
													<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
																	{{ Auth::user()->name }} <span class="caret"></span>
															</a>

															<ul class="dropdown-menu" role="menu">
																	<li>
																			<a href="{{ route('logout') }}"
																					onclick="event.preventDefault();
																									 document.getElementById('logout-form').submit();">
																					Logout
																			</a>

																			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																					{{ csrf_field() }}
																			</form>
																	</li>
															</ul>
													</li>
											@endif
									</ul>
							</div>
					</div>
			</nav>
	</div>
	<header>

	  	<h1><img name="hueso" src="source/hueso1.png" style="float: left; margin-left: 30px;">La cucha que su perro desea...
			<img name="hueso" src="source/hueso1.png" style="float: right; margin-right: 30px;"></h1>

	</header>
	<div class="col-lg-12">
				@yield('content')
	</div>

	<div id="menu" class="row">
		<div class="col-lg-6">
			<div class="col-lg-4">
				<h3>Tamaño</h3>
				<div class="form-group">
			 	@foreach($tamanos as $tamano)
					<input type="radio" name='{{ $tamano->name }}' value='{{ $tamano->value }}' 
						title='{{ $tamano->type }}'>{{ $tamano->text }}<br>
				@endforeach
				</div>
				<br>
			</div>

			<div class="col-lg-4">
				<img id="imgMat" style="float: left; margin-top:5px; margin-right: 10px; width:16px; height:150px;">
				<h3>Material</h3>
				@foreach($materiales as $material)
					<input type="radio" name='{{ $material->name }}' value='{{ $material->value }}' 
						title='{{ $material->type }}'>{{ $material->text }}<br>
				@endforeach
				<br>
			</div>

			<div class="col-lg-4">
				<h3>Ventana</h3>
				@foreach($ventanas as $ventana)
					<input type="radio" name='{{ $ventana->name }}' value='{{ $ventana->value }}' 
						title='{{ $ventana->type }}'>{{ $ventana->text }}<br>
				@endforeach
				<br>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<ul id="tipoPestaña"  class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#paredes">Paredes</a></li>
						<li><a data-toggle="tab" href="#techo">Techo</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div id="paredes" class="tab-pane fade in active">
						<div class="col-lg-6 navUnit">
							<h3>Estilo</h3>
							@foreach($estilos as $estilo)
								<input type="radio" class='{{ $estilo->class }}' name='{{ $estilo->name }}' value='{{ $estilo->value }}' title='{{ $estilo->type }}'>{{ $estilo->text }}<br>
							@endforeach
							<br>
						</div>

						<div class="col-lg-6 navUnit">
							<h3>Color</h3>
								<input id="colorPared1" type="color" name="colorPared1" value="#0000ff" title="100" onchange="btnFunctions(id,value)"><br>
								<br><input id="colorPared2" type="color" name="colorPared2" value="#0000ff" title="200" onchange="btnFunctions(id,value)">
						</div>
					</div>

					<div id="techo" class="tab-pane fade">
						<div class="col-lg-6 navUnit">
							<h3>Forma</h3>
							@foreach($formas as $forma)
								<input type="radio" name='{{ $forma->name }}' value='{{ $forma->value }}' title='{{ $forma->type }}'>{{ $forma->text }}<br>
							@endforeach
							<br>
						</div>

						<div class="col-lg-6 navUnit">
							<h3>Color</h3>
								<input  id="colorTecho" type="color" name="colorTecho" value="#ff0000" title="100" onchange="btnFunctions(id,value)">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="col-lg-8">
				<canvas id="canvas" width="400" height="400" style="background-color:#BBBBBB"></canvas>
				<center>
					<button type="button" class="btn1" onclick="downloadImage()">Descargar</button>
					<button type="button" class="btn1" onclick="urlImage()">Compartir</button>
					<input class="textBox" type="text" id="compartir" readonly="true" value="link">

					<meta name="csrf-token" content="{{ csrf_token() }}" />
					@if (!(Auth::guest()))
					<button id="post" type="button" class="btn1">Guardar</button>
					<button id="get" type="button" class="btn1">Cargar</button>
					@endif
				</center>
			</div>
			<div class="col-lg-4">
				<h4>Modelos Predeterminados</h4>
				<div class="btn-group-vertical" role="group">
					<ul><button type="button" class="btn1" onclick="cheapModel()" >Economica</button></ul>
					<ul><button type="button" class="btn1" onclick="classicModel()">Clasica</button></ul>
					<ul><button type="button" class="btn1" onclick="ejecutiveModel()">Ejecutiva</button></ul>
				</div>
			</div>

		</div>
		<p>Costo Total <input class="textBox" type="text" id="total" readonly="true" value=0> <p>
	</div>

	<footer>
		<!--<a  onclick="footerInformation()" > ¿Quienes somos? </a><br />-->
		<a class="linkFooter" onclick="footerInformation()">Quienes somos</a>

		<div class="dropup">
		<button class="btn" type="button" data-toggle="dropdown">Estilo
		<span class="caret"></span></button>
			<ul class="dropdown-menu">
			<li><a href="#" onclick="reStyle('estilo1')">Estilo 1</a></li>
			<li><a href="#" onclick="reStyle('estilo2')">Estilo 2</a></li>
			<li><a href="#" onclick="noStyle()">Sin Estilo</a></li>
			</ul>
		</div>

			@if (!(Auth::guest()))

			@if (Auth::user()->type == 'admin')

					<a href="{{ route('editPage') }}" ><input type="submit" name="button" value="Editar pagina" class="btnEditPage"/><a/>
			@endif
			@endif

	</footer>
</body>

@endsection
