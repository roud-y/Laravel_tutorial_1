@extends('layout')

@section('content')
	<h4>Modification</h4>
	{{ $songs->nom }} 
	<p>{{$songs->calories}}</p>


	{!! Form::model($songs, ['route' => ['fruit.update', $songs->slug], 'method' => 'PATCH']) !!}

	@include('songs/_form')

	{!! Form::close() !!}

	{!! delete_form(['fruit.destroy', $songs->slug]); !!}
	
@stop