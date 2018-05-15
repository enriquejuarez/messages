@extends('layout')
@section('contenido')
	<h1>Contactos</h1>
	@if( session()->has('info'))
		{{ session('info') }}
	@else
	<form action="{{ route('mensajes.store') }}" method="POST">
		@csrf
		<label for="nombre">
			Nombre
			<input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
			{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
		</label><br>
		<label for="email">
			Email
			<input class="form-control" type="email" name="email" value="{{ old('email') }}">
			{!! $errors->first('email', '<span class=error>:message</span>') !!}
		</label><br>
		<label for="mensaje">
			Mensaje
			<textarea class="form-control" name="mensaje" cols="30" rows="10"></textarea>
			{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
		</label><br>
		<input type="submit" value="Enviar">
	</form>
	@endif
@stop