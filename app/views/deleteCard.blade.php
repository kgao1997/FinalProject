@extends('master')

@section('header') 
  Delete Card Interface  
@stop

@section ('content')
    {{Form::open(array('url' => '/deleteCard', 'method' => 'POST'))}}
	{{Form::label('query', 'Search Card')}}
	{{Form::text('query')}}
	{{Form::submit('Search!')}}
	{{Form::close()}}
@stop
