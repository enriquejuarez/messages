<!DOCTYPE html>
<html>
<head>
	<title>Mi stio</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<header>
		<?php function activeMenu($url)
			{
				return request()->is($url) ? 'active' : '';
			}
		?>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Title</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="{{ activeMenu('/') }}"><a href="{{ route('home') }}">Inicio</a></li>
						<li class="{{ activeMenu('saludos*') }}"><a href="{{ route('saludos', 'Carlos') }}">Saludos</a></li>
						<li class="{{ activeMenu('mensajes/create') }}"><a href="{{ route('mensajes.create') }}">Contacto</a></li>
						@if (auth()->check())
							<li class="{{ activeMenu('mensajes*') }}"><a href="{{ route('mensajes.index') }}">
							Mensajes</a></li>
							@if (auth()->user()->hasRoles(['admin', 'estudiante']))
								<li class="{{ activeMenu('usuarios*') }}"><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
							@endif
						@endif
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@if (auth()->check())
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->name }} <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="/logout">Cerrar sesión</a></li>
									<li><a href="/usuarios/{{ auth()->id() }}/edit">Mi cuenta</a></li>
								</ul>
							</li>
						@else
							<li class="{{ activeMenu('login') }}"><a href="/login">Login</a></li>
						@endif

					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>
	<div class="container">
		@yield('contenido')

		<footer>
			Propiedad intelectual de la empresa SOR, la distribución parcial o completa esta prohibida. 
		</footer>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>