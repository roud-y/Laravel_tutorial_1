@extends('layout')

@section('content')


	{{ $songs->nom }} 
	@if ($songs->calories <= 0)
		<p>Ne contient pas de calories!</p>
	@else
		<p>{{$songs->calories}}</p>
	@endif

	{!! link_to_route('fruit.index', 'retour à l\'accueil') !!}
@stop