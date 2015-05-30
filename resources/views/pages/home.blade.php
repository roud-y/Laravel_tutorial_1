@extends('layout')

@section('content')

	Home page

	<p>{!! $fruits !!}</p>

	@foreach ($legumes as $key)

		<li>{{ $key }}</li>

	@endforeach
	
@stop