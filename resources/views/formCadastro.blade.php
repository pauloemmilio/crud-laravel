@extends('layouts.app')

@section('content')

@include('menu')

<div class="container">
		<form method="post" action="/frase">
			{{ csrf_field() }}
			<p>Frase: <input required type="text" name="frase" /></p>
			<p>Autor: <input required type="text" name="autor" /></p>
			<input type="submit"/>
		</form>
</div>
@endsection
