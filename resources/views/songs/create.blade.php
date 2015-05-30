@extends('layout')

@section('content')
	<h4>Ajout d'un fruit</h4>

	
	{!! Form::open(['route' => 'fruit.store']) !!}

	@include('songs/_form');
	
	{!! Form::close() !!}
	
@stop