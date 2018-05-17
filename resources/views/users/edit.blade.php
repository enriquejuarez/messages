@extends('layout')
@section('contenido')
	<h1>Editar Usuario</h1>
	@if( session()->has('info'))
		<div class="alert alert-success">{{ session('info') }}</div>
	@endif
	<form action="{{ route('usuarios.update', $user->id) }}" method="POST" >
		{!! method_field('PUT') !!}
		@csrf
		<label for="name">
			Nombre
			<input class="form-control" type="text" name="name" value="{{ $user->name  }}">
			{!! $errors->first('name', '<span class=error>:message</span>') !!}
		</label><br>
		<label for="email">
			Email
			<input class="form-control" type="email" name="email" value="{{ $user->email }}">
			{!! $errors->first('email', '<span class=error>:message</span>') !!}
		</label><br>
		<input type="submit" value="Enviar" class="btn btn-primary">
	</form>
@stop