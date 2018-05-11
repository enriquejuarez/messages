@extends('layout')
@section('contenido')
	<h1>Contactos</h1>
	@if( session()->has('info'))
		{{ session('info') }}
	@else
	<form action="{{ route('messages.store') }}" method="POST" >
		@csrf
		<label for="nombre">
			Nombre
			<input type="text" name="nombre" value="{{ old('nombre') }}">
			{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
		</label>
		<label for="email">
			Email
			<input type="email" name="email" value="{{ old('email') }}">
			{!! $errors->first('email', '<span class=error>:message</span>') !!}
		</label>
		<label for="nombre">
			Mensaje
			<textarea name="mensaje" cols="30" rows="10"></textarea>
			{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
		</label>
		<input type="submit" value="Enviar">
	</form>
	@endif
@stop