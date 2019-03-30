@extends('layouts.app')

@section('content')

@include('menu')

<div class="container">
		<form method="post" action="/frase/{{$frase->id}}">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<p>Frase: <input required type="text" name="frase" value="{{$frase->frase}}"/></p>
			<p>Autor: <input required type="text" name="autor" value="{{$frase->autor}}"/></p>
			<input type="submit"/>
		</form>
</div>
@endsection
