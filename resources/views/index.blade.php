@extends('layouts.app')

@section('content')

@include('menu')

<div class="container">
		@foreach($frases as $frase)
			<p><b>Frase {{$frase->id}}:</b> "{{$frase->frase}}" <b>- Autor:</b> {{$frase->autor}}
			<p><a href='frase/{{$frase->id}}/edit'> Editar </a> - <a href='frase/excluir/{{$frase->id}}'> Excluir </a></p>
			<br/>
		@endforeach
</div>
@endsection