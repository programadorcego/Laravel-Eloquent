@extends("layouts.admin")

@section("title", $title)

@push("css")
	<link rel="stylesheet" href="{{ asset("assets/css/users.css") }}">
@endpush

@section("body")
	<h1>{{ $title }}</h1>
	
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Ações</th>
			</tr>
		</thead>
		
		<tbody>
	@forelse($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td><a href="{{ route("user", $user->id) }}">{{ $user->name }}</a></td>
			<td>{{ $user->email }}</td>
			<td><a href="{{ route('user.delete', $user->id) }}">Remover</a></td>
		</tr>
	@empty
		<tr>
			<td colspan="4">Nenhum usuário cadastrado</td>
		</tr>
	@endforelse
		</tbody>
</table>
@endsection