@extends('layout')
@section('contenido')
	<h1>Usuarios</h1>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Rol</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users  as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->rol }}</td>
					<td></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop