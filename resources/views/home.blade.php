@extends ('layout')

@section ('Titulo', 'Home')
@section ('TP')
	<h1>Home</h1>
	<p>Sea bienvenido a mi blog pesonal</p>
	<ul>
		
		@foreach($colores as $key)
		<li> {{$key ['nombre']}} </li>
		@endforeach
	</ul>
@endsection
