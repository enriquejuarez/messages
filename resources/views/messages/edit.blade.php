@extends('layout')
@section('contenido')
	<h1>Editar mensaje de {{ $message->nombre }}</h1>
	<form action="{{ route('mensajes.update', $message->id) }}" method="POST" >
		{!! method_field('PUT') !!}
		@csrf
		<label for="nombre">
			Nombre
			<input class="form-control" type="text" name="nombre" value="{{ $message->nombre }}">
			{!! $errors->first('nombre', '<span class=error>:message</span>') !!}
		</label>
		<label for="email">
			Email
			<input class="form-control" type="email" name="email" value="{{ $message->email }}">
			{!! $errors->first('email', '<span class=error>:message</span>') !!}
		</label>
		<label for="nombre">
			Mensaje
			<textarea class="form-control" name="mensaje" cols="30" rows="10">{{ $message->mensaje }}</textarea>
			{!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
		</label>
		<input type="submit" value="Enviar" class="btn btn-primary">
	</form>
@stop