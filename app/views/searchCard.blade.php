@extends('master')

@section('title')
	Search
@stop


@section('content')

	<h1>Search Cards</h1>
	{{Form::open(array('url' => '/searchCard', 'method' => 'POST'))}}
	{{Form::label('query', 'Search Card')}}
	{{Form::text('query')}}
	{{Form::submit('Search!')}}
	{{Form::close()}}
//EasterEgg
	
	
	
@stop