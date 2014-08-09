@extends('master')

@section('header')
  <h1> Magic The Gathering:  Innistrad Deck Builder </h1>
@stop

@section('content')
  <h1> Card Catalog </h1>
  <p>
	{{link_to('/cardCatalog', 'Card Catalog')}} </p>
	
  <h1> Deck Builder </h1>
  <p>
    {{link_to('/deckbuilder', 'Deck Builder')}}
  </p>

  <h1>  Add Card </h1>
  <p>
    {{link_to('/addCard', 'Add Card')}}
  </p>

  <h1>  Delete Card </h1>
  <p>
    {{link_to('/deleteCard', 'Delete Card')}}
  </p>

  
  
@stop
  