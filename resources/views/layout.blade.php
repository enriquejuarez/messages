<!DOCTYPE html>
<html>
<head>
	<title>Mi stio</title>
	<meta charset="utf-8">
	<style type="text/css">
		.active{
			text-decoration: none;
			color: green;
		}
		.error{
			color: red;
			font-size: .8em;
		}
	</style>
</head>
<body>
	<header>
		<?php function activeMenu($url)
			{
				return request()->is($url) ? 'active' : '';
			}
		?>
		<nav>
			<a class="{{ activeMenu('/') }}" href="{{ route('home') }}"> Inicio</a>
			<a class="{{ activeMenu('saludos/*') }}" href="{{ route('saludos', 'Carlos') }}">Saludo</a>
			<a class="{{ activeMenu('mensajes/create') }}" href="{{ route('messages.create') }}">Contacto
			<a class="{{ activeMenu('mensajes/') }}" href="{{ route('messages.index') }}">Mensajes</a>
		</nav>
	</header>

	@yield('contenido')

	<footer>
		Propiedad intelectual de la empresa SOR, la distribución parcial o completa esta prohibida. 
	</footer>

</body