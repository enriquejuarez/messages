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
					<td>
						@foreach ($user->roles as $role)
							{{ $role->display_name }}
						@endforeach
					</td>
					<td>
						<a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-info">Editar</a>
						<form style="display: inline;" method="POST" action="{{ route('usuarios.destroy', $user->id) }}">
							{!! method_field('DELETE') !!}
							@csrf
							<button type="submit" class="btn btn-danger">Eliminar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop