@extends('base')

@section('imports')
	<link id="estilo1" rel="stylesheet" type="text/css" href="css/estilo1.css">
	<script src="js/edit.js" type="text/javascript"></script>
@endsection

@section('content')
<body>
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
											<!-- Authentication links -->
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

	<div id="menuEditar" class="col-lg-12" >
		<br>
	<div class="col-lg-3">
		<ul class="nav nav-stacked">
	  	<li class="active"><a data-toggle="tab" href="#tamaños">Tamaños</a></li>
	  	<li><a data-toggle="tab" href="#materiales">Materiales</a></li>
	  	<li ><a data-toggle="tab" href="#ventanas">Ventanas</a></li>
			<li ><a data-toggle="tab" href="#estilos">Estilos</a></li>
			<li ><a data-toggle="tab" href="#formas">Formas</a></li>
		</ul>
	</div>
	<div class="tab-content">

				<div id="tamaños" class="tab-pane fade in active">

							<div class="col-lg-9 navUnit">
									<br>
							<table>
									<th>Tamaño</th>
						      <th>Precio</th>
						      <th>Descripcion</th>
									<tr>
										{!! Form::open(['route' => 'editPage/createTam', 'method' => 'post', 'novalidate']) !!}
										<td><div class="form-group">{!! Form::text('value', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('title', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('text', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="crear" name="button" value="Crear" class="btnEditPage"/><a/></div></td>
										 {!! Form::close() !!}
									</tr>

									@foreach ($tamanos as $tamano)

												<tr>
													{!! Form::open(['route' => ['editPage/updateTam/{id}' , $tamano->id ] , 'method' => 'post', 'novalidate']) !!}
													<td><div class="form-group">{!! Form::text('value', $tamano->value, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('title',$tamano->title, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('text', $tamano->text, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="actualizar" name="button" value="Actualizar" class="btnEditPage"/><a/></div></td>
													{!! Form::close() !!}
													<td><div class="form-group"><a href="{{ route('editPage/tamano/destroy/{id}', ['id' => $tamano->id]) }}" ><input type="submit" id="eliminar" name="button" value="Eliminar" class="btnEditPage"/><a/></div></td>

												</tr>

								@endforeach
							</table>
				</div>
	</div>
				<div id="materiales" class="tab-pane fade">
							<div class="col-lg-9 navUnit">
								<br>
							<table>
									<th>Material</th>
						      <th>Precio</th>
									<th>Descripcion</th>
									<tr>


										{!! Form::open(['route' => 'editPage/createMat', 'method' => 'post', 'enctype' => 'multipart/form-data' , 'novalidate']) !!}
										<td><div class="form-group">{!! Form::text('value', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('title', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('text', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
									<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="crear" name="button" value="Crear" class="btnEditPage"/><a/></div></td>
										{!! Form::close() !!}
									</tr>
									@foreach ($materiales as $material)

												<tr>
													{!! Form::open(['route' => ['editPage/updateMat/{id}' , $material->id ] , 'method' => 'post', 'novalidate']) !!}
													<td><div class="form-group">{!! Form::text('value', $material->value, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('title',$material->title, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('text', $material->text, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="actualizar" name="button" value="Actualizar" class="btnEditPage"/><a/></div></td>
													{!! Form::close() !!}
													<td><div class="form-group"><a href="{{ route('editPage/material/destroy/{id}', ['id' => $material->id]) }}" ><input type="submit" id="eliminar" name="button" value="Eliminar" class="btnEditPage"/><a/></div></td>
												</tr>

								@endforeach
							</table>
							</div>

				</div>
				<div id="ventanas" class="tab-pane fade">
							<div class="col-lg-9 navUnit">
								<br>
							<table>
									<th>Ventana</th>
						      <th>Precio</th>
						      <th>Descripcion</th>
									<tr>
										{!! Form::open(['route' => 'editPage/createVen', 'method' => 'post', 'novalidate']) !!}
										<td><div class="form-group">{!! Form::text('value', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('title', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('text', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="crear" name="button" value="Crear" class="btnEditPage"/><a/></div></td>
										{!! Form::close() !!}
									</tr>
									@foreach ($ventanas as $ventana)

												<tr>
													{!! Form::open(['route' => ['editPage/updateVen/{id}' , $ventana->id ] , 'method' => 'post', 'novalidate']) !!}
													<td><div class="form-group">{!! Form::text('value', $ventana->value, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('title',$ventana->title, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('text', $ventana->text, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="actualizar" name="button" value="Actualizar" class="btnEditPage"/><a/></div></td>
													{!! Form::close() !!}
													<td><div class="form-group"><a href="{{ route('editPage/ventana/destroy/{id}', ['id' => $ventana->id]) }}" ><input type="submit" id="eliminar" name="button" value="Eliminar" class="btnEditPage"/><a/></div></td>
												</tr>

								@endforeach
							</table>
							</div>

				</div>
				<div id="estilos" class="tab-pane fade">
							<div class="col-lg-9 navUnit">
								<br>
							<table>
									<th>Estilo</th>
									<th>Clase</th>
						      <th>Precio</th>
						      <th>Descripcion</th>
									<tr>
										{!! Form::open(['route' => 'editPage/createEst', 'method' => 'post', 'novalidate']) !!}
										<td><div class="form-group">{!! Form::text('value', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('class', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('title', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('text', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="crear" name="button" value="Crear" class="btnEditPage"/><a/></div></td>
										{!! Form::close() !!}
									</tr>
									@foreach ($estilos as $estilo)

												<tr>
													{!! Form::open(['route' => ['editPage/updateEst/{id}' , $estilo->id ] , 'method' => 'post', 'novalidate']) !!}
													<td><div class="form-group">{!! Form::text('value', $estilo->value, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('class',$estilo->class, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('title', $estilo->title, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('text', $estilo->text, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="actualizar" name="button" value="Actualizar" class="btnEditPage"/><a/></div></td>
													{!! Form::close() !!}
													<td><div class="form-group"><a href="{{ route('editPage/estilo/destroy/{id}', ['id' => $estilo->id]) }}" ><input type="submit" id="eliminar" name="button" value="Eliminar" class="btnEditPage"/><a/></div></td>
												</tr>

								@endforeach
							</table>
							</div>

				</div>
				<div id="formas" class="tab-pane fade">
							<div class="col-lg-9 navUnit">
								<br>
							<table>
									<th>Forma</th>
						      <th>Precio</th>
						      <th>Descripcion</th>
									<tr>
										{!! Form::open(['route' => 'editPage/createFor', 'method' => 'post', 'novalidate']) !!}
										<td><div class="form-group">{!! Form::text('value', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('title', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group">{!! Form::text('text', null, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
										<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="crear" name="button" value="Crear" class="btnEditPage"/><a/></div></td>
										{!! Form::close() !!}
									</tr>
									@foreach ($formas as $forma)

												<tr>
													{!! Form::open(['route' => ['editPage/updateFor/{id}' , $forma->id ] , 'method' => 'post', 'novalidate']) !!}
													<td><div class="form-group">{!! Form::text('value', $forma->value, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('title',$forma->title, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group">{!! Form::text('text', $forma->text, ['class' => 'form-control' , 'required' => 'required']) !!}</div></td>
													<td><div class="form-group"><a href="{{ route('editPage') }}" ><input type="submit" id="actualizar" name="button" value="Actualizar" class="btnEditPage"/><a/></div></td>
													{!! Form::close() !!}
													<td><div class="form-group"><a href="{{ route('editPage/forma/destroy/{id}', ['id' => $forma->id]) }}" ><input type="submit" id="eliminar" name="button" value="Eliminar" class="btnEditPage"/><a/></div></td>
												</tr>

								@endforeach
							</table>
							</div>

				</div>
		</div>


</div>
	<footer>

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

	</footer>
	</body>
@endsection
