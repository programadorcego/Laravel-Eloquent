@extends("layouts.admin")

@section("title", $title)

@section("body")
	<h1>{{ $title }}</h1>
	
	<a href="{{ route("users") }}">Voltar</a>
	
	<p>{{ $user->name }} | {{ $user->email }}</p>
@endsection