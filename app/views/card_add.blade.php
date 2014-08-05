@extends('master')

@section('title')
	 Add Card Interface
@stop

@section('content')
    <h1> Add a New Card </h1>
	
	{{Form::open(array('url' => '/add_card', 'method' => 'POST'))}}
	
	
	  {{Form::label('cardName', 'Card Name')}}
	  {{Form::text('cardName')}}
	
	
	
	  {{Form::label('manaCost', 'Mana Cost')}}
	  {{Form::text('manaCost')}}
	
	
	
	  {{Form::label('cardText', 'Card Text')}}
	  {{Form::text('cardText')}}
	
	
	{{Form::submit('Add')}}
	
	
{{Form::close()}}

@stop