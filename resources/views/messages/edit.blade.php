@extends('layout')
@section('contenido')
	<h1>Editar mensaje de {{ $message->nombre }}</h1>
	<form action="{{ route('messages.update', $message->id) }}" method="POST" >
		{!! method_field('PUT') !!}
		@csrf
		<label for="nombre">
			Nombre
			<input type="text" name="nombre" value="{{ $message->nombre }}">
			{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
		</label>
		<label for="email">
			Email
			<input type="email" name="email" value="{{ $message->email }}">
			{!! $errors->first('email', '<span class=error>:message</span>') !!}
		</label>
		<label for="nombre">
			Mensaje
			<textarea name="mensaje" cols="30" rows="10">{{ $message->mensaje }}</textarea>
			{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
		</label>
		<input type="submit" value="Enviar">
	</form>
@stop