@extends('layout')

@section('content')


	@foreach ($songs as $index)

		<li><a href="{{ route('fruit.show', [$index->slug]) }}">{{ $index->nom }}</a> créer le {{ $index->created_at }}</li>

	@endforeach
	
@stop